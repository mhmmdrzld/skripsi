<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tkerja extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_tkerja', 'tkerja');
    }

    public function index()
    {
        $data['title'] = "Tempat Kerja";
        $this->page('data_induk/tkerja', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->tkerja->get_data($nip)->row();
        echo json_encode($data);
    }
}
