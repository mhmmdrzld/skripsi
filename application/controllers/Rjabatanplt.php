<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rjabatanplt extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rjabatanplt', 'rjabatanplt');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Jabatan PLT";
        $this->page('riwayat/pegawai/rjabatanplt', $data);
    }


    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rjabatanplt->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rjabatanplt->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rjabatanplt->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rjabatanplt->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rjabatanplt->delete($id);
        echo json_encode($result);
    }
}
