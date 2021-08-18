<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rtkerja extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rtkerja', 'rtkerja');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Tempat Kerja";
        $this->page('riwayat/pegawai/rtkerja', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rtkerja->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rtkerja->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rtkerja->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rtkerja->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rtkerja->delete($id);
        echo json_encode($result);
    }
}
