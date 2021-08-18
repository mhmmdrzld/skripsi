<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rkaryatulis extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rkaryatulis', 'rkaryatulis');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Karya Tulis";
        $this->page('riwayat/pendidikan/rkaryatulis', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rkaryatulis->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rkaryatulis->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rkaryatulis->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rkaryatulis->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rkaryatulis->delete($id);
        echo json_encode($result);
    }
}
