<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rpenyaji extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rpenyaji', 'rpenyaji');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Penyaji";
        $this->page('riwayat/pendidikan/rpenyaji', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rpenyaji->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rpenyaji->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rpenyaji->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rpenyaji->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rpenyaji->delete($id);
        echo json_encode($result);
    }
}
