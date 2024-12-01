<?php

namespace App\Controllers;

class Reports extends BaseController{

    public function index(){ 
        $reportsmodel = model('Reports_model');

        // $data['reports'] = $reportsmodel->get()->getResult();
        $data['users'] = $reportsmodel->paginate(10);
        $data['pager'] = $reportsmodel->pager;

        $data['title'] = "Reports";

        return view('include\header', $data) 
            .view('include\navbar_itso')
            .view('reports_view', $data)
            .view('include\footer');

    }
}