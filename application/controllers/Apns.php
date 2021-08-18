<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apns extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_apns', 'apns');
    }

    public function index()
    {
        $data['title'] = "PNS";
        $this->page('data_induk/apns', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->apns->get_data($nip)->row();
        echo json_encode($data);
    }
}
