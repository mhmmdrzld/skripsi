<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pkerja extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pkerja', 'pkerja');
    }

    public function index()
    {
        $data['title'] = "Tempat Kerja Instansi";
        $this->page('data_induk/pkerja', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->pkerja->get_data($nip)->row();
        echo json_encode($data);
    }
}
