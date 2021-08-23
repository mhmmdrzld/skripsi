<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_beranda', 'model');
        if ($this->session->userdata('level') !== 'Admin') {
            $this->session->set_flashdata('alert', ['type' => 'warning', 'message' => 'Anda tidak memiliki hak akses !']);
            redirect('Login');
        }
    }

    public function index()
    {
        $data['title'] = "Beranda";
        $this->load->view('admin/beranda', $data);
    }

    public function GetBerandaAdmin()
    {
        $post = $this->input->post(NULL, true);
        $data = $this->model->GetBerandaAdmin($post);
        echo json_encode($data);
    }
}
