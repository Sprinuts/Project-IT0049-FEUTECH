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

        $data = [
            'borrower' => null,
            'borroweddate' => null,
        ];

        $equipmentsmodel->update($id, $data);

        return redirect()->to('returning');

    }

}