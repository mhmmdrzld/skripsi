<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('M_login', 'model');
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
}
