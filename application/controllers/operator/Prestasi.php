<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_prestasi', 'model');
        if ($this->session->userdata('level') !== 'Operator') {
            $this->session->set_flashdata('alert', ['type' => 'warning', 'message' => 'Anda tidak memiliki hak akses !']);
            redirect('Login');
        }
    }

    public function index()
    {
        $data['title'] = "Data Prestasi Ekstrakurikuler ";
        $this->load->view('operator/v_prestasi', $data);
    }

    public function GetData()
    {
        $post = $this->input->post(NULL, true);
        $data = $this->model->GetData($post, $_SESSION['npsn']);
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->model->insert($data);
        echo json_encode($result);
    }

    public function GetDataByID()
    {
        $postData = $this->input->get('id', true);
        $data = $this->model->GetDataByID($postData)->row();
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

    public function Cetak()
    {
        $data['dt'] = $this->model->Cetak($_SESSION['npsn']);
        $this->load->library('Pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "cetak.pdf";
        $this->pdf->load_view('operator/v_cetakprestasi', $data);
    }
}
