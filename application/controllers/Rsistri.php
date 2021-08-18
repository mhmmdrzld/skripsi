<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rsistri extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rsistri', 'rsistri');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Suami / Istri";
        $this->page('riwayat/keluarga/rsistri', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rsistri->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rsistri->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rsistri->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rsistri->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rsistri->delete($id);
        echo json_encode($result);
    }
}
