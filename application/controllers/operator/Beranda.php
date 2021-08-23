<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_beranda', 'model');
        if ($this->session->userdata('level') !== 'Operator') {
            $this->session->set_flashdata('alert', ['type' => 'warning', 'message' => 'Anda tidak memiliki hak akses !']);
            redirect('Login');
        }
    }

    public function index()
    {
        $data['title'] = "Beranda";
        $this->load->view('operator/beranda', $data);
    }

    public function GetBerandaOperator()
    {
        $data = $this->model->GetBerandaOperator();
        echo json_encode($data);
    }
}
