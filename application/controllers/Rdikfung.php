<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rdikfung extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rdikfung', 'rdikfung');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Diklat Fungsional";
        $this->page('riwayat/pendidikan/rdikfung', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rdikfung->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rdikfung->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rdikfung->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rdikfung->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rdikfung->delete($id);
        echo json_encode($result);
    }
}
