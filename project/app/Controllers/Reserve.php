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

    public function reservingid($id){
        $equipmentsmodel = model('Equipments_model');
        // $usersmodel = model('Users_model');

        // $equipment = $equipmentsmodel->find($id);


        if($this->request->is('POST')){
            $username = session()->get('username');
            $dateborrowed = $this->request->getPost('datetoborrow');

            // $rules = [
            //     'datetoborrowed' => 'required'
            // ];

            // $messages = [
            //     'datetoborrowed' => [
            //         'required' => 'Date Borrowed is required.'
            //     ]
            // ];

            // if(!$this->validateData($dateborrowed ,$rules, $messages)){
            //     //reload the page with errors

            //     $data['title'] = "Add User";

            //     return view('include\header_itso', $data)
            //         .view('include\navbar_itso')
            //         .view('users_add')
            //         .view('include\footer_itso');

            // }

            $datereserved = date('Y-m-d');

            $equipmentsmodel->update($id, [
                'reserver' => $username,
                'datereserved' => $datereserved,
                'datetoborrow' => $dateborrowed
            ]);

            return redirect()->to('reserve');
        }

        $data['id'] = $id;

        $data['title'] = "Reserve Equipment";


        return view('include\header', $data)
            .view('include\navbar_associate')
            .view('reservingid_view', $data)
            .view('include\footer');
    }
}



?>