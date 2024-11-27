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

            $lastUser = $usersmodel->orderBy('id', 'DESC')->first();
            $lastId = $lastUser ? $lastUser['id'] : 0;
            $newId = str_pad($lastId + 1, 5, '0', STR_PAD_LEFT);
            $registerdata['username'] = date('Y') . $newId;

            $defaultpass = $this->request->getPost([
                'birthdate'
            ]);

            $registerdata['password'] = $defaultpass['birthdate'];

            $usersmodel->insert($registerdata);

            return redirect()->to('/users');

        }

        $data['title'] = "Add User";



        return view('include\header_itso', $data)
        .view('include\navbar_itso')
        .view('users_add')
        .view('include\footer_itso');
    }

    public function delete($id = 0){

        $usersmodel = model('Users_model');
        $usersmodel->delete($id);
        return redirect()->to('users');
    }
}

?>