<?php

namespace App\Controllers;

class Borrow extends BaseController{
    public function index(){
        
        $equipmentsmodel = model('Equipments_model');

        //$data['equipments'] = $equipmentsmodel->get()->getResult();
        $data['equipments'] = $equipmentsmodel->get()->getResult();

        $data['title'] = "Borrow Equipments";

        return view('include\header_itso', $data) //change this to associate or student depending on the condition on the session
            .view('include\navbar_itso')
            .view('borrow_view', $data)
            .view('include\footer_itso');

    }

    public function borrowing($category){

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
        
        echo $category;

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
        // return view('include\header', $data) //change this to associate or student depending on the condition on the session
        //     .view('include\navbar')
        //     .view('borrowing_view', $data)
        //     .view('include\footer');
    }

    public function borrow($id){
        $equipmentsmodel = model('Equipments_model');
        $usersmodel = model('Users_model');

        $equipment = $equipmentsmodel->find($id);

        $registerdata = $usersmodel->where('username', session()->get('username'))->first();

        $username = session()->get('username');
        $dateborrowed = date('Y-m-d H:i:s');

        $equipmentsmodel->update($id, [
            'borrower' => $username,
            'dateborrowed' => $dateborrowed
        ]);

        $email = service('email');
        $email->setTo($registerdata['email']);
        $message = "Hello, " . $registerdata['name'] . "!\n\nYou Borrowed. '".$equipment['equipmentname']."' on "
        .$dateborrowed.".\n\n<b>From Far Eastern University Institute of Technology</b>";
        $email->setMessage($message);
        if(!$email->send()){
            print_r($email->printDebugger());
        }

        return redirect()->to('/borrow');
    }
    // public function confirmBorrow($id){
    //     $equipmentsmodel = model('Equipments_model');
    //     $username = session()->get('username');
    //     $dateborrowed = date('Y-m-d H:i:s');

    //     $equipmentsmodel->update($id, [
    //         'borrower' => $username,
    //         'dateborrowed' => $dateborrowed
    //     ]);

    //     return redirect()->to('/borrow');
    // }

}