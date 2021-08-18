<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rpendum extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rpendum', 'rpendum');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Pendidikan Umum";
        $this->page('riwayat/pendidikan/rpendum', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rpendum->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rpendum->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rpendum->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rpendum->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rpendum->delete($id);
        echo json_encode($result);
    }
}
