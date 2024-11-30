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

        $data['equipments'] = $equipmentsmodel->get()->getResult();

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
            .view('include\navbar_student')
            .view('borrowing_view', $data)
            .view('include\footer');
        }
        // return view('include\header', $data) //change this to associate or student depending on the condition on the session
        //     .view('include\navbar')
        //     .view('borrowing_view', $data)
        //     .view('include\footer');
    }

}