<?php
// ITSO side only
namespace App\Controllers;

class Equipments extends BaseController{
    public function index(){
        
        $equipmentsmodel = model('Equipments_model');

        $data['equipments'] = $equipmentsmodel->get()->getResult();

        $data['title'] = "List of Users";

        return view('include\header_itso', $data)
            .view('include\navbar_itso')
            .view('equipments_view', $data)
            .view('include\footer_itso');

    }

    public function add(){
        helper('form');

        if($this->request->is('POST')){

            $equipmentsmodel = model('Equipments_model');

            $registerdata = $this->request->getPost([
                'equipmentname',
                'description',
                'quantity',
                'status',
            ]);

            $rules = [
                'name' => 'required',
                'description' => 'required',
                'quantity' => 'required',
                'status' => 'required',
            ];

            $messages = [
                'name' => [
                    'required' => 'Name is required.'
                ],
                'description' => [
                    'required' => 'Description is required.'
                ],
                'quantity' => [
                    'required' => 'Quantity is required.'
                ],
                'status' => [
                    'required' => 'Status is required.'
                ],
            ];

            if(!$this->validate($rules, $messages)){
                $data['validation'] = $this->validator;
            } else {
                $equipmentsmodel->save($registerdata);
                return redirect()->to('equipments');
            }
        }

        $data['title'] = "Add Equipment";

        return view('include\header_itso', $data)
            .view('include\navbar_itso')
            .view('equipments_add')
            .view('include\footer_itso');
    }
}