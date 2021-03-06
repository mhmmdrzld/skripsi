<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eskul extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_eskul', 'model');
        if ($this->session->userdata('level') !== 'Siswa') {
            $this->session->set_flashdata('alert', ['type' => 'warning', 'message' => 'Anda tidak memiliki hak akses !']);
            redirect('Login');
        }
    }

    public function index()
    {
        $data['title'] = "Data Ekstrakurikuler ";
        $this->load->view('siswa/v_eskul', $data);
    }

    public function GetData()
    {
        $post = $this->input->post(NULL, true);
        $data = $this->model->GetData($post, $_SESSION['npsn']);
        echo json_encode($data);
    }

    public function GetDataJadwal()
    {
        $post = $this->input->post(NULL, true);
        $data = $this->model->GetDataJadwal($post);
        echo json_encode($data);
    }

    public function GetJumlahAnggota()
    {
        $post = $this->input->post(NULL, true);
        $data = $this->model->GetJumlahAnggota($post);
        echo json_encode($data);
    }

    public function GetDataByID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->model->GetDataByID($postData)->row();
        echo json_encode($data);
    }

    public function GetStatusAnggota()
    {
        $postData = $this->input->post(null, true);
        $data = $this->model->GetStatusAnggota($postData);
        echo json_encode($data);
    }

    public function GabungEskul()
    {
        $postData = $this->input->post(null, true);
        $data = $this->model->GabungEskul($postData);
        echo json_encode($data);
    }

    public function KeluarEskul()
    {
        $postData = $this->input->post(null, true);
        $data = $this->model->KeluarEskul($postData);
        echo json_encode($data);
    }

    public function GetDataPrestasi()
    {
        $post = $this->input->post(NULL, true);
        $data = $this->model->GetDataPrestasi($post);
        echo json_encode($data);
    }
}
