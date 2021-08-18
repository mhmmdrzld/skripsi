<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acpns extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_acpns', 'acpns');
    }

    public function index()
    {
        $data['title'] = "CPNS";
        $this->page('data_induk/acpns', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->acpns->get_data($nip)->row();
        echo json_encode($data);
    }
}
