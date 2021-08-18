<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pakhir extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pakhir', 'pakhir');
    }

    public function index()
    {
        $data['title'] = "Pangkat Terakhir";
        $this->page('data_induk/pakhir', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->pakhir->get_data($nip)->row();
        echo json_encode($data);
    }
}
