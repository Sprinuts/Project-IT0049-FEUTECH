<?php

namespace App\Controllers;


class Reserve extends BaseController{

    public function index(){
        if(session()->has('isLogged')){
            if(session()->get('role') != 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

        $data['title'] = "Reserve Equipment";

        return view('include\header', $data)
            .view('include\navbar_associate')
            .view('reserve_view')
            .view('include\footer');
    }

    public function reserving(){
        if(session()->has('isLogged')){
            if(session()->get('role') != 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }
            
        $equipmentsmodel = model('Equipments_model');

        $data['equipments'] = $equipmentsmodel->get()->getResult();

        $data['title'] = "Reserve Equipment";
    
            return view('include\header', $data)
                .view('include\navbar_associate')
                .view('reserving_view', $data)
                .view('include\footer');
    }

    public function reservingcategory($category){
        if(session()->has('isLogged')){
            if(session()->get('role') != 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

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
        if(session()->has('isLogged')){
            if(session()->get('role') != 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

        $equipmentsmodel = model('Equipments_model');


        if($this->request->is('POST')){
            $username = session()->get('username');
            $dateborrowed = $this->request->getPost('datetoborrow');

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

    public function reservation(){
        if(session()->has('isLogged')){
            if(session()->get('role') != 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

        $equipmentsmodel = model('Equipments_model');

        $username = session()->get('username');

        $data['equipments'] = $equipmentsmodel
            ->where('reserver', $username)
            ->paginate(2);

        $data['pager'] = $equipmentsmodel->pager;

        $data['title'] = "View Reservation";

        return view('include\header', $data)
            .view('include\navbar_associate')
            .view('reservation_view')
            .view('include\footer');
    }

    public function cancel($id){
        if(session()->has('isLogged')){
            if(session()->get('role') != 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

        $equipmentsmodel = model('Equipments_model');

        $equipmentsmodel->update($id, [
            'reserver' => null,
            'datereserved' => null,
            'datetoborrow' => null
        ]);

        return redirect()->to('reserve');
    }

    public function reschedule($id){
        if(session()->has('isLogged')){
            if(session()->get('role') != 'associate'){
                return redirect()->to('logout');
            }
        } else {
            return redirect()->to('login');
        }

        $equipmentsmodel = model('Equipments_model');

        if($this->request->is('POST')){
            $dateborrowed = $this->request->getPost('datetoborrow');

            $equipmentsmodel->update($id, [
                'datetoborrow' => $dateborrowed
            ]);

            return redirect()->to('reserve');
        }

        $data['id'] = $id;

        $data['title'] = "Reserve Equipment";

        return view('include\header', $data)
            .view('include\navbar_associate')
            .view('reservationresched_view', $data)
            .view('include\footer');
    }
}



?>