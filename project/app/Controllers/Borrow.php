<?php

namespace App\Controllers;

class Borrow extends BaseController{
    public function index(){
        if(session()->has('isLogged')){
            if(session()->get('role') != 'students' || session()->get('role') != 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }
        
        $equipmentsmodel = model('Equipments_model');

        //$data['equipments'] = $equipmentsmodel->get()->getResult();
        $data['equipments'] = $equipmentsmodel->get()->getResult();

        $data['title'] = "Borrow Equipments";

        if(session()->get('role') == 'associate'){
            return view('include\header', $data) 
                .view('include\navbar_associate')
                .view('borrow_view', $data)
                .view('include\footer');
        } else if(session()->get('role') == 'student'){
            return view('include\header', $data) 
                .view('include\navbar_students')
                .view('borrow_view', $data)
                .view('include\footer');
        }
    }

    public function borrowing($category){
        if(session()->has('isLogged')){
            if(session()->get('role') != 'students' || session()->get('role') != 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

        $equipmentsmodel = model('Equipments_model');

        // $data['equipments'] = $equipmentsmodel->get()->getResult();
        $data['equipments'] = $equipmentsmodel
            ->where('category', $category)
            ->where('reserver IS NULL')
            ->where('borrower IS NULL')
            ->where('status', 1)
            ->paginate(2);

        $data['pager'] = $equipmentsmodel->pager;

        $data['title'] = "Borrow Equipments";

        $data['category'] = $category;
        
        if(session()->get('role') == 'associate'){
            return view('include\header', $data) 
                .view('include\navbar_associate')
                .view('borrowing_view', $data)
                .view('include\footer');
        } else if(session()->get('role') == 'student'){
            return view('include\header', $data) 
                .view('include\navbar_students')
                .view('borrowing_view', $data)
                .view('include\footer');
        }
    }

    public function borrow($id){
        if(session()->has('isLogged')){
            if(session()->get('role') != 'students' || session()->get('role') != 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

        $equipmentsmodel = model('Equipments_model');
        $usersmodel = model('Users_model');
        $reportsmodel = model('Reports_model');

        $equipment = $equipmentsmodel->find($id);

        $registerdata = $usersmodel->where('username', session()->get('username'))->first();

        $accessories = ucwords(str_replace('-', ' ', $equipment['accessories']));

        $username = session()->get('username');
        $dateborrowed = date('Y-m-d H:i:s');

        $equipmentsmodel->update($id, [
            'borrower' => $username,
            'dateborrowed' => $dateborrowed
        ]);

        $email = service('email');
        $email->setTo($registerdata['email']);
        $message = "Hello, " . $registerdata['name'] . "!\n\nYou Borrowed. '".$equipment['equipmentname']."' with ".$accessories. " on "
        .$dateborrowed.".\n\n<b>From Far Eastern University Institute of Technology</b>";
        $email->setMessage($message);
        if(!$email->send()){
            print_r($email->printDebugger());
        }

        $reportsmodel->insert([
            'username' => $username,
            'equipmentid' => $equipment['equipmentid'],
            'type' => 'Borrowed',
            'equipmentname' => $equipment['equipmentname'],
            'category' => $equipment['category'],
        ]);

        return redirect()->to('/borrow');
    }

}