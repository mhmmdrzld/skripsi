<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sekolah extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_sekolah', 'model');
        if ($this->session->userdata('level') !== 'Operator') {
            $this->session->set_flashdata('alert', ['type' => 'warning', 'message' => 'Anda tidak memiliki hak akses !']);
            redirect('Login');
        }
    }

    public function index()
    {
        $data['title'] = "Data Sekolah";
        $this->load->view('operator/v_sekolah', $data);
    }

    public function GetSekolah()
    {
        $post = $this->input->post(NULL, true);
        $data = $this->model->GetSekolah($post, $this->session->userdata('npsn'));
        echo json_encode($data);
    }

    public function GetSekolahByID()
    {
        $postData = $this->input->get('npsn', true);
        $data = $this->model->GetSekolahByID($postData)->row();
        echo json_encode($data);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->model->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->model->delete($id);
        echo json_encode($id);
    }
}
