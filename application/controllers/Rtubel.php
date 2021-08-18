<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rtubel extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rtubel', 'rtubel');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Tugas Belajar Pegawai";
        $this->page('riwayat/pendidikan/rtubel', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rtubel->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rtubel->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rtubel->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rtubel->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rtubel->delete($id);
        echo json_encode($result);
    }
}
