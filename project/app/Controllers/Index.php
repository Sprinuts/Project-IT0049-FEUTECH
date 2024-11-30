<?php

namespace App\Controllers;

class Index extends BaseController{
    public function index(){
        if(session()->has('isLogged')){
            if(session()->get('role') == 'itso'){
                return redirect()->to('welcomeitso');
            } else if(session()->get('role') == 'associate'){
                return redirect()->to('welcomeassociate');
            } else if(session()->get('role') == 'student'){
                return redirect()->to('welcomestudent');
            }
        } else {
            return redirect()->to('login');
        }

        echo "hello gawin mo na project";

        $data['title'] = "Welcome to Forknik University";

        return view('include\header', $data)
            .view('include\footer');
    }

    // add index function here for itso welcome page
    public function welcomeitso(){
        if(session()->has('isLogged')){
            if(!session()->get('role') == 'itso'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

        $data['title'] = "Welcome to Forknik University";

        return view('include\header', $data)
            .view('include\navbar_itso')
            .view('welcomeitso_view')
            .view('include\footer');
    }

    // add index function here for associate welcome page
    public function welcomeassociate(){
        if(session()->has('isLogged')){
            if(!session()->get('role') == 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

        $data['title'] = "Welcome to Forknik University";

        return view('include\header', $data)
            .view('include\navbar_associate')
            .view('welcomeassociate_view')
            .view('include\footer');
    }

    // add index function here for student welcome page
    public function welcomestudent(){
        if(session()->has('isLogged')){
            if(!session()->get('role') == 'student'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

        $data['title'] = "Welcome to Forknik University";

        return view('include\header', $data)
            .view('include\navbar_students')
            .view('welcomestudent_view')
            .view('include\footer');
    }

    // login function here
    public function login(){
        if(session()->has('isLogged')){
            if(session()->get('role') == 'itso'){
                return redirect()->to('welcomeitso');
            } else if(session()->get('role') == 'associate'){
                return redirect()->to('welcomeassociate');
            } else if(session()->get('role') == 'student'){
                return redirect()->to('welcomestudent');
            }
        }


        if($this->request->is('POST')){
            // Load model
            $usersmodel = model('Users_model');
            // Retrieve data from form
            $userreset = $this->request->getPost(['username', 'password']);
            // Set filter then query from tblusers
            $user  = $usersmodel->where('username', $userreset['username'])
                ->where('password', $userreset['password'])
                ->first();
            
            if(!$user){
                session()->setFlashdata('error', 'Username and/or password in invalid.');
            } else{
                if ($user['status'] != 1) {
                    session()->setFlashdata('error', 'The account is not yet activated. Please check your email.');
                } else {
                    // Redirects to home page if log in was successful
                    session()->set('isLogged', true);
                    session()->set('username', $user['username']);
                    session()->set('role', $user['role']);
                    if($user['role'] == 'itso'){
                        return redirect()->to('welcomeitso');   
                    } else if($user['role'] == 'associate'){
                        return redirect()->to('welcomeassociate');
                    } else if($user['role'] == 'student'){
                        return redirect()->to('welcomestudent');
                    }
                }
            }
        }

        $data['title'] = "Log In";

        return view('include\header', $data)
            .view('login_view')
            .view('include\footer');
    }

    public function resetpassword(){
        if($this->request->is('POST')){
            // Load model
            $usersmodel = model('Users_model');
            // Retrieve data from form
            $userreset = $this->request->getPost(['username']);
            // Set filter then query from tblusers
            $user  = $usersmodel->where('username', $userreset['username'])->first();


            if(!$user){
                session()->setFlashdata('error', "Username doesn't exist.");

                return redirect()->to('login');
            }else{
                $resetpassword['resetcode'] = uniqid();

                $usersmodel->update($user['id'], $resetpassword);
                
                $email = service('email');
                $email->setTo($user['email']);
                $message = "Hello, " . $user['name'] . "!\n\nYou have requested to reset your password.
                Please <a href='". base_url('reset/'.$resetpassword['resetcode']) ."'>
                click this link</a> to reset your password.<br><br> <b>From Forknik University</b>";
                $email->setMessage($message);
                if(!$email->send()){
                    print_r($email->printDebugger());
                }

                return redirect()->to('login');
            }
        }
    }

    public function reset($resetcode){
        helper('form');

        if($this->request->is('POST')){
            // Load model
            $usersmodel = model('Users_model');
            // Retrieve data from form
            $userreset = $this->request->getPost([
                'newpass',
                'confirmpass',
            ]);
            // Set filter then query from tblusers
            $user  = $usersmodel->where('resetcode', $resetcode)->first();

            $rules = [
                'newpass' => 'required|min_length[8]',
                'confirmpass' => 'required|matches[newpass]',
            ];

            $messages = [
                'newpass' => [
                    'required' => 'New password is required.',
                    'min_length' => 'New password must be at least 8 characters.',
                ],
                'confirmpass' => [
                    'required' => 'Confirm password is required.',
                    'matches' => 'Passwords do not match.',
                ],
            ];

            if(!$this->validateData($userreset ,$rules, $messages)){
                //reload the page with errors

                $data['resetcode'] = $resetcode;

                $data['title'] = "New Password";

                return view('include\header', $data)
                    .view('reset_view', $data)
                    .view('include\footer');
            }
            
            if(!$user){
                echo $resetcode;
            }else{
                $resetpassword['password'] = $userreset['newpass'];

                $usersmodel->update($user['id'], $resetpassword);

                return redirect()->to('login');
            }
        }

        $data['resetcode'] = $resetcode;

        $data['title'] = "New Password";

        return view('include\header', $data)
            .view('reset_view', $data)
            .view('include\footer');
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('login');
    }

    public function about(){
        $data['title'] = "About Us";

        return view('include\header', $data)
            .view('about_view')
            .view('include\footer');
    }
}


?>