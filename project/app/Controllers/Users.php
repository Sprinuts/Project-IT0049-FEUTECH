<?php
// ITSO side only
namespace App\Controllers;

class Users extends BaseController{
    public function index(){
        
        $usersmodel = model('Users_model');

        $data['users'] = $usersmodel->get()->getResult();

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
            $message = "Hello, " . $registerdata['name'] . "!\n\nCongratulations, you are now part of Forknik University.
            Please <a href='". base_url('users/activate/'.$registerdata['activationcode']) ."'>
            click this activation link</a> to activate your account.<br><br> <b>From Forknik University</b>";
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

        return redirect()->to('/'); //change this later
    }

    public function delete($id = 0){

        $usersmodel = model('Users_model');
        $usersmodel->delete($id);
        return redirect()->to('users');
    }
}

?>