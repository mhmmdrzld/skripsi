<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rdikstr extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rdikstr', 'rdikstr');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Diklat Struktural";
        $this->page('riwayat/pendidikan/rdikstr', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rdikstr->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rdikstr->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rdikstr->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rdikstr->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rdikstr->delete($id);
        echo json_encode($result);
    }
}
