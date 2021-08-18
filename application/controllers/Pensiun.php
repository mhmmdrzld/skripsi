<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pensiun extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pensiun', 'pensiun');
    }

    public function  index()
    {
        $data['title'] = "Mutasi Pensiun Pegawai";
        $this->page('riwayat/pegawai/pensiun', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->pensiun->get_data($nip)->row();
        echo json_encode($data);
    }
}
