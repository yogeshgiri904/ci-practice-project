<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_control extends CI_Controller {

    public function index(){
        $this->load->model('crud_model');
        $data['showData'] = $this->crud_model->getDataToShow();
        $this->load->view('crud', $data);
    }

    public function insertData(){
        $this->load->model('crud_model');
        if($this->input->post('submit')){
            $postArray = array(
                "title" => $this->input->post('titleAtForm'),
                "note" => $this->input->post('noteAtForm'),
            );
            $this->form_validation->set_rules('titleAtForm','title','required|trim');
            $this->form_validation->set_rules('noteAtForm','note','required|trim');
            if($this->form_validation->run())
            {
                $inserted = $this->crud_model->insertModel($postArray);
                if($inserted){
                    redirect('/');
                }
            }
            else{
                $this->load->model('crud_model');
                $data['showData'] = $this->crud_model->getDataToShow();
                $this->load->view('crud', $data);

            }
        }

    }

    public function updateData($sn){
        $this->load->model('crud_model');
        $updateData['getData'] = $this->crud_model->get_by_id($sn);
        $this->load->view('edit', $updateData);

        if($this->input->post('submit')){
            $updateArray=array(
                "title"=>$this->input->post('title'),
                "note"=>$this->input->post('note'),
            );
            $update=$this->crud_model->updatedModel($sn, $updateArray);
            if($update){
                redirect('/');
            }
        }

    }

    public function deleteData($id){
        $this->load->model('crud_model');
        $deleted = $this->crud_model->deleteModel($id);
        if($deleted){
            redirect('/');
        }
    }

    public function contact(){
        $this->load->view('gst');
    }

    public function gstControl(){
        if($this->input->post('calc')){
            $amount = $this->input->post('amount');
            $tax = $this->input->post('tax');
            $data['ans'] = array(
                "amount"=>$amount,
                "tax"=>$tax,
                "total"=>$amount + (($amount * $tax)/100)
            );
            $this->load->view('gst', $data);
        }
    }
	

}
