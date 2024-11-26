<?php
// ITSO side only
namespace App\Controllers;

class Users extends BaseController{
    public function index(){
        
        $usersmodel = model('Users_model');

        $data['users'] = $usersmodel->get()->getResult();

        $data['title'] = "List of Users";

        return view('include\header_itso', $data)
            .view('include\footer_itso')
            .view('include\navbar_itso')
            .view('users_view', $data);

    }
}

?>