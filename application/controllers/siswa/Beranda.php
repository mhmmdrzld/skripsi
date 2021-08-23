<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_beranda', 'model');
        if ($this->session->userdata('level') !== 'Siswa') {
            $this->session->set_flashdata('alert', ['type' => 'warning', 'message' => 'Anda tidak memiliki hak akses !']);
            redirect('Login');
        }
    }

    public function index()
    {
        $data['title'] = "Beranda";
        $this->load->view('siswa/beranda', $data);
    }

    public function GetBerandaSiswa()
    {
        $post = $this->input->post(NULL, true);
        $data = $this->model->GetBerandaSiswa($post);
        echo json_encode($data);
    }
}
