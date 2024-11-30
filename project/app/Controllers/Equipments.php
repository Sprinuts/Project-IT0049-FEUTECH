<?php
// ITSO side only
namespace App\Controllers;

class Equipments extends BaseController{
    public function index(){
        
        $equipmentsmodel = model('Equipments_model');

        // $data['equipments'] = $equipmentsmodel->get()->getResult();

        $data['equipments'] = $equipmentsmodel->paginate(10); //increase this if not testing
        $data['pager'] = $equipmentsmodel->pager;

        $data['title'] = "List of Equipments";

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
                'category',
                'accessories',
                'description',
            ]);

            $rules = [
                'equipmentname' => 'required',
                'category' => 'required',
                'accessories' => 'required',
                'description' => 'required',
            ];

            $messages = [
                'equipmentname' => [
                    'required' => 'Equipment name is required.'
                ],
                'category' => [
                    'required' => 'Category is required.'
                ],
                'accessories' => [
                    'required' => 'Accessories are required.'
                ],
                'description' => [
                    'required' => 'Description is required.'
                ],
            ];

            if(!$this->validateData($registerdata ,$rules, $messages)){
                //reload the page with errors

                $data['title'] = "Add Equipment";

                return view('include\header_itso', $data)
                    .view('include\navbar_itso')
                    .view('equipments_add')
                    .view('include\footer_itso');

            }

            $lastEquipment = $equipmentsmodel->orderBy('id', 'DESC')->first();
            $lastId = $lastEquipment ? $lastEquipment['id'] : 0;
            $newId = str_pad($lastId + 1, 8, '0', STR_PAD_LEFT);
            $registerdata['equipmentid'] = "CCS{$newId}";

            $equipmentsmodel->insert($registerdata);

            return redirect()->to('equipments');
        }

        $data['title'] = "Add Equipment";

        return view('include\header_itso', $data)
            .view('include\navbar_itso')
            .view('equipments_add')
            .view('include\footer_itso');
    }

    public function edit($id = 0){
        helper('form');

        $equipmentsmodel = model('Equipments_model');

        $data['equipment'] = $equipmentsmodel->find($id);

        if($this->request->is('POST')){

            $registerdata = $this->request->getPost([
                'equipmentname',
                'category',
                'accessories',
                'description',
            ]);

            $rules = [
                'equipmentname' => 'required',
                'category' => 'required',
                'accessories' => 'required',
                'description' => 'required',
            ];

            $messages = [
                'equipmentname' => [
                    'required' => 'Equipment name is required.'
                ],
                'category' => [
                    'required' => 'Category is required.'
                ],
                'accessories' => [
                    'required' => 'Accessories are required.'
                ],
                'description' => [
                    'required' => 'Description is required.'
                ],
            ];

            if(!$this->validateData($registerdata ,$rules, $messages)){
                //reload the page with errors

                $data['title'] = "Edit Equipment";

                return view('include\header_itso', $data)
                    .view('include\navbar_itso')
                    .view('equipments_edit', $data)
                    .view('include\footer_itso');

            }

            $equipmentsmodel->update($id, $registerdata);

            return redirect()->to('equipments');
        }

        $data['title'] = "Edit Equipment";

        return view('include\header_itso', $data)
            .view('include\navbar_itso')
            .view('equipments_edit', $data)
            .view('include\footer_itso');
    }

    public function view($id = 0){
        $equipmentsmodel = model('Equipments_model');

        $data['title'] = "Equipment Information";

        $data['equipment'] = $equipmentsmodel->where('id', $id)->first();

        return view('include\header_itso', $data)
            .view('include\navbar_itso')
            .view('equipmentsid_view', $data)
            .view('include\footer_itso');
    }

    public function delete($id = 0){

        $equipmentmodel = model('Equipments_model');
        $equipmentmodel->delete($id);
        return redirect()->to('equipments');
    }
}