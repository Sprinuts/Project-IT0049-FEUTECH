<?php
// ITSO side only
namespace App\Controllers;

class Users extends BaseController{
    public function index(){
        
        $usersmodel = model('Users_model');

        //$data['users'] = $usersmodel->get()->getResult();
        $data['users'] = $usersmodel->paginate(2); //increase this if not testing
        $data['pager'] = $usersmodel->pager;


        $data['title'] = "List of Users";

        return view('include\header_itso', $data)
            .view('include\navbar_itso')
            .view('users_view', $data)
            .view('include\footer_itso');

    }

    public function add(){
        helper('form');

        if($this->request->is('POST')){

            $usersmodel = model('Users_model');

            $registerdata = $this->request->getPost([
                'name',
                'birthdate',
                'role',
                'email',
            ]);

            $rules = [
                'name' => 'required',
                'birthdate' => 'required',
                'role' => 'required',
                'email' => 'required|valid_email',
            ];

            $messages = [
                'name' => [
                    'required' => 'Fullname is required.'
                ],
                'birthdate' => [
                    'required' => 'Birthdate is required.'
                ],
                'role' => [
                    'required' => 'Role is required.'
                ],
                'email' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Email is invalid.'
                ],
            ];

            if(!$this->validateData($registerdata ,$rules, $messages)){
                //reload the page with errors

                $data['title'] = "Add User";

                return view('include\header_itso', $data)
                    .view('include\navbar_itso')
                    .view('users_add')
                    .view('include\footer_itso');

            }

            //generate username format YYYY00001
            $lastUser = $usersmodel->orderBy('id', 'DESC')->first();
            $lastId = $lastUser ? $lastUser['id'] : 0;
            $newId = str_pad($lastId + 1, 5, '0', STR_PAD_LEFT);
            $registerdata['username'] = date('Y') . $newId;

            //generate password from birthdate as default
            $defaultpass = $this->request->getPost([
                'birthdate'
            ]);
            $registerdata['password'] = $defaultpass['birthdate'];

            $registerdata['activationcode'] = uniqid();

            $usersmodel->insert($registerdata);

            // sending the activation code to the user
            $email = service('email');
            $email->setTo($registerdata['email']);
            $message = "Hello, " . $registerdata['name'] . "!\n\nCongratulations, you are now part of Far Eastern University Institute of Technology.
            Please <a href='". base_url('users/activate/'.$registerdata['activationcode']) ."'>
            click this activation link</a> to activate your account.<br><br> <b>From Far Eastern University Institute of Technology</b>";
            $email->setMessage($message);
            if(!$email->send()){
                print_r($email->printDebugger());
            }

            return redirect()->to('/users');

        }

        $data['title'] = "Add User";


        return view('include\header_itso', $data)
        .view('include\navbar_itso')
        .view('users_add')
        .view('include\footer_itso');
    }

    public function activate($activationcode){
        $usersmodel = model('Users_model');
        $user = $usersmodel->where('activationcode', $activationcode)->first();
        $updatedata['status'] = 1;
        $usersmodel->update($user['id'], $updatedata);

        return redirect()->to('login'); //change this later, it should direct to login
    }

    public function view($id = 0){
        $usersmodel = model('Users_model');

        $data['title'] = "User Information";

        $data['user'] = $usersmodel->where('id', $id)->first();

        return view('include\header_itso', $data)
        .view('include\navbar_itso')
        .view('users_idview', $data)
        .view('include\footer_itso');
    }

    public function edit($id = 0){
        helper('form');

        $usersmodel = model('Users_model');

        if($this->request->is('POST')){

            $updatedata = $this->request->getPost([
                'name',
                'birthdate',
                'role',
                'email',
            ]);

            $rules = [
                'name' => 'required',
                'birthdate' => 'required',
                'role' => 'required',
                'email' => 'required|valid_email',
            ];

            $messages = [
                'name' => [
                    'required' => 'Fullname is required.'
                ],
                'birthdate' => [
                    'required' => 'Birthdate is required.'
                ],
                'role' => [
                    'required' => 'Role is required.'
                ],
                'email' => [
                    'required' => 'Email is required.',
                    'valid_email' => 'Email is invalid.'
                ],
            ];

            if(!$this->validateData($updatedata ,$rules, $messages)){
                //reload the page with errors
                
                $data['title'] = "Add User";

                return view('include\header_itso', $data)
                    .view('include\navbar_itso')
                    .view('users_edit')
                    .view('include\footer_itso');

            }

            $usersmodel->update($id, $updatedata);

            return redirect()->to('users');

        }

        $data['title'] = "Edit User";

        $data['user'] = $usersmodel->find($id);

        return view('include\header_itso', $data)
        .view('include\navbar_itso')
        .view('users_edit', $data)
        .view('include\footer_itso');
    }

    public function delete($id = 0){

        $usersmodel = model('Users_model');
        $usersmodel->delete($id);
        return redirect()->to('users');
    }
}

?>