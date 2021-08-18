<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rdiktek extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rdiktek', 'rdiktek');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Diklat Teknis";
        $this->page('riwayat/pendidikan/rdiktek', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rdiktek->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rdiktek->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rdiktek->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rdiktek->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rdiktek->delete($id);
        echo json_encode($result);
    }
}
