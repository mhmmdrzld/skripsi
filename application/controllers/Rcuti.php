<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rcuti extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rcuti', 'rcuti');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Cuti";
        $this->page('riwayat/pegawai/rcuti', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rcuti->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rcuti->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rcuti->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rcuti->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rcuti->delete($id);
        echo json_encode($result);
    }
}
