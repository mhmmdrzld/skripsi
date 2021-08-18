<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rakand extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rakand', 'rakand');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Ayah Kandung";
        $this->page('riwayat/keluarga/rakand', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->rakand->get_data($nip)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rakand->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rakand->update($data);
        echo json_encode($result);
    }
}
