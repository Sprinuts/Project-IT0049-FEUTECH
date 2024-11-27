<?php

namespace App\Controllers;

class Index extends BaseController{
    public function index(){
        if(session()->has('isLogged')){
            return redirect()->to('/');
        }

        echo "hello gawin mo na project";
    }

    // add index function here for itso welcome page

    // add index function here for associate welcome page

    // add index function here for student welcome page

    // login function here
    public function login(){
        if(!session()->has('isLogged')){
            return redirect()->to('login');
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
            }else{
                if ($user['status'] != 1) {
                    echo "The account is not yet activated.";
                } else {
                    // Redirects to home page if log in was successful
                    session()->set('isLogged', true);
                    return redirect()->to('/');
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
        if($this->request->is('POST')){
            // Load model
            $usersmodel = model('Users_model');
            // Retrieve data from form
            $userreset = $this->request->getPost(['newpass']);
            // Set filter then query from tblusers
            $user  = $usersmodel->where('resetcode', $resetcode)->first();
            
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
}


?>