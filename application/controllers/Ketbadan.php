<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ketbadan extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_ketbadan', 'ketbadan');
    }

    public function index()
    {
        $data['title'] = "Keterangan Fisik";
        $this->page('data_induk/ketbadan', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->ketbadan->get_data($nip)->row();
        echo json_encode($data);
    }
}
