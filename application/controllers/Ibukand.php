<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ibukand extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_ibukand', 'ibukand');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Ibu Kandung";
        $this->page('riwayat/keluarga/ibukand', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->ibukand->get_data($nip)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->ibukand->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->ibukand->update($data);
         echo json_encode($result);
    }
}
