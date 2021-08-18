<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ranak extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_ranak', 'ranak');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Anak";
        $this->page('riwayat/keluarga/ranak', $data);
    }

    public function get_anak()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->ranak->get_anak($postData);

        echo json_encode($data);
    }

    public function get_anak_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->ranak->get_anak_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->ranak->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->ranak->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->ranak->delete($id);
        echo json_encode($result);
    }
}
