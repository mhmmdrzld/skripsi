<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rjabatan extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rjabatan', 'rjabatan');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Jabatan";
        $this->page('riwayat/pegawai/rjabatan', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rjabatan->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rjabatan->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rjabatan->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rjabatan->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rjabatan->delete($id);
        echo json_encode($result);
    }
}
