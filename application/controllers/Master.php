<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_master', 'model');
    }

    public function GetDataEskul()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->model->GetDataEskul($id)->result();
        echo json_encode($data);
    }

    public function GetDataKelas()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->model->GetDataKelas($id)->result();
        echo json_encode($data);
    }

    public function GetDataJurusan()
    {
        $id = $this->input->post('id', TRUE);
        $data = $this->model->GetDataJurusan($id)->result();
        echo json_encode($data);
    }
}
