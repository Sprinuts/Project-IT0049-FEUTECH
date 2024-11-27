<?php

namespace App\Controllers;

class Index extends BaseController{
    public function index(){
        echo "hello gawin mo na project";
    }

    // add index function here for itso welcome page

    // add index function here for associate welcome page

    // add index function here for student welcome page

    // login function here
    public function login(){
        helper('form');
        if($this->request->is('POST')){
            // Load model
            $usersmodel = model('Users_model');
            // Retrieve data from form
            $logindata = $this->request->getPost(['username', 'password']);
            // Set filter then query from tblusers
            $user  = $usersmodel->where('username', $logindata['username'])
                ->where('password', $logindata['password'])
                ->first();
            
            if(!$user){
                // If no user found, display error message
            }else{
                if ($user['status'] != 1) {
                    echo "The account is not yet activated.";
                } else {
                    // Redirects to home page if log in was successful
                    return redirect()->to('/');
                }
            }
        }

        $data['title'] = "Log In";

        return view('include\header', $data)
            .view('login_view')
            .view('include\footer');
    }
}


?>