<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rkursus extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rkursus', 'rkursus');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Seminar";
        $this->page('riwayat/pendidikan/rkursus', $data);
    }


    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rkursus->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rkursus->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rkursus->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rkursus->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rkursus->delete($id);
        echo json_encode($result);
    }
}
