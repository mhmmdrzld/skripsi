<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rtugas extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rtugas', 'rtugas');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Tugas";
        $this->page('riwayat/pegawai/rtugas', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rtugas->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rtugas->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rtugas->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rtugas->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rtugas->delete($id);
        echo json_encode($result);
    }
}
