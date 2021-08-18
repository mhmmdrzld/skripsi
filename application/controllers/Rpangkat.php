<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rpangkat extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rpangkat', 'rpangkat');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Kepangkatan";
        $this->page('riwayat/pegawai/rpangkat', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rpangkat->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rpangkat->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rpangkat->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rpangkat->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rpangkat->delete($id);
        echo json_encode($result);
    }
}
