<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Raorg extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_raorg', 'raorg');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Organisasi";
        $this->page('riwayat/pegawai/raorg', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->raorg->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->raorg->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->raorg->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->raorg->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->raorg->delete($id);
        echo json_encode($result);
    }
}
