<?php
// ITSO side only
namespace App\Controllers;

class Users extends BaseController{
    public function index(){
        
        $equipmentsmodel = model('Equipments_model');

        $data['equipments'] = $equipmentsmodel->get()->getResult();

        $data['title'] = "List of Users";

        return view('include\header_itso', $data)
            .view('include\navbar_itso')
            .view('equipment_view', $data)
            .view('include\footer_itso');

    }
}