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

}