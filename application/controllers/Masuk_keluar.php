<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk_keluar extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_masuk_keluar', 'mk');
    }

    public function index()
    {
        $data['title'] = "Masuk / Keluar Pegawai";
        $this->page('data_induk/masuk_keluar', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->mk->get_data($nip)->row();
        echo json_encode($data);
    }
}
