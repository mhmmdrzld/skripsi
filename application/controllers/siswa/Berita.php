<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita', 'model');
        if ($this->session->userdata('level') !== 'Siswa') {
            $this->session->set_flashdata('alert', ['type' => 'warning', 'message' => 'Anda tidak memiliki hak akses !']);
            redirect('Login');
        }
    }

    public function sekolah()
    {
        $data['title'] = "Berita Sekolah";
        $data['jenis'] = "Sekolah";
        $this->load->view('siswa/v_berita', $data);
    }

    public function ekstrakurikuler()
    {
        $data['title'] = "Berita Esktrakurikuler";
        $data['jenis'] = "Ekstrakurikuler";
        $this->load->view('siswa/v_beritaeskul', $data);
    }

    public function GetData()
    {
        $post = $this->input->post(NULL, true);
        $data = $this->model->GetData($post);
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, false);
        $result =  $this->model->insert($data);
        echo json_encode($result);
    }

    public function GetDataByIDSiswa()
    {
        $postData = $this->input->get(null, true);
        $data = $this->model->GetDataByIDSiswa($postData)->row();
        echo json_encode($data);
    }

    public function GetDataByID()
    {
        $postData = $this->input->get(null, true);
        $data = $this->model->GetDataByID($postData)->row();
        echo json_encode($data);
    }

    public function update()
    {
        $data = $this->input->post(null, false);
        $result =  $this->model->update($data);
        echo json_encode($result);
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $result = $this->model->delete($id);
        echo json_encode($id);
    }

    public function CekStatusAnggota()
    {
        $postData = $this->input->post(null, true);
        $data = $this->model->CekStatusAnggota($postData);
        echo json_encode($data);
    }

    public function CekEskulAnggota()
    {
        $postData = $this->input->post(null, true);
        $data = $this->model->CekEskulAnggota($postData);
        echo json_encode($data);
    }

    public function CekAksiAnggota()
    {
        $postData = $this->input->post(null, true);
        $data = $this->model->CekAksiAnggota($postData);
        echo json_encode($data);
    }
}
