<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdakhir extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pdakhir','pdakhir');
    }

    public function index()
    {
        $data['title'] = "Pendidikan Akhir";
        $this->page('data_induk/pdakhir', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->pdakhir->get_data($nip)->row();
        echo json_encode($data);
    }


}
