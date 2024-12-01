<?php

namespace App\Controllers;


class Reserve extends BaseController{

    public function index(){

        $data['title'] = "Welcome to Forknik University";

        return view('include\header', $data)
            .view('include\navbar_associate')
            .view('reserve_view')
            .view('include\footer');
    }

    public function reserving(){
            
        $equipmentsmodel = model('Equipments_model');

        $data['equipments'] = $equipmentsmodel->get()->getResult();

        $data['title'] = "Reserve Equipment";
    
            return view('include\header', $data)
                .view('include\navbar_associate')
                .view('reserving_view', $data)
                .view('include\footer');
    }

    public function reservingcategory($category){

        $equipmentsmodel = model('Equipments_model');

        $data['equipments'] = $equipmentsmodel
            ->where('category', $category)
            ->where('reserver IS NULL')
            ->where('borrower IS NULL')
            ->where('status', 1)
            ->paginate(2);

        $data['pager'] = $equipmentsmodel->pager;

        $data['title'] = "Reserve Equipment";

        $data['category'] = $category;
        
        
        return view('include\header', $data) 
            .view('include\navbar_associate')
            .view('reservingcategory_view', $data)
            .view('include\footer');
    }

}



?>