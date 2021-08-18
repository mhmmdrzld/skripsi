<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rtatar extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_rtatar', 'rtatar');
    }

    public function  index()
    {
        $data['title'] = "Riwayat Penataran";
        $this->page('riwayat/pendidikan/rtatar', $data);
    }

    public function get_data()
    {
        $postData = $this->input->post(NULL, true);
        $data = $this->rtatar->get_data($postData);

        echo json_encode($data);
    }

    public function get_data_byID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->rtatar->get_data_byID($postData)->row();
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rtatar->insert($data);
        echo json_encode($result);
}

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->rtatar->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->rtatar->delete($id);
        echo json_encode($result);
    }
}
