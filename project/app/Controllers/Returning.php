<?php

namespace App\Controllers;

class Returning extends BaseController{

    public function index(){

        $equipmentsmodel = model('Equipments_model');

        $username = session()->get('username');

        // $data['equipments'] = $equipmentsmodel->get()->getResult();
        $data['equipments'] = $equipmentsmodel
            ->where('borrower', $username)
            ->paginate(2);

        $data['pager'] = $equipmentsmodel->pager;

        $data['title'] = "Borrow Equipments";
        
        if(session()->get('role') == 'associate'){
            return view('include\header', $data) 
                .view('include\navbar_associate')
                .view('returning_view', $data)
                .view('include\footer');
        } else if(session()->get('role') == 'student'){
            return view('include\header', $data) 
                .view('include\navbar_students')
                .view('returning_view', $data)
                .view('include\footer');
        }

    }

    public function returning($id){

        $equipmentsmodel = model('Equipments_model');
        $usersmodel = model('Users_model');

        $equipment = $equipmentsmodel->where('id', $id)->first();

        $registerdata = $usersmodel->where('username', session()->get('username'))->first();
        
        $accessories = ucwords(str_replace('-', ' ', $equipment['accessories']));

        $data = [
            'borrower' => null,
            'dateborrowed' => null,
        ];

        $equipmentsmodel->update($id, $data);

        $email = service('email');
        $email->setTo($registerdata['email']);
        $message = "Hello, " . $registerdata['name'] . "!\n\nYou Returned. '".$equipment['equipmentname']."' with "
        .$accessories.".\n\n<b>From Far Eastern University Institute of Technology</b>";
        $email->setMessage($message);
        if(!$email->send()){
            print_r($email->printDebugger());
        }

        return redirect()->to('returning');

    }

}