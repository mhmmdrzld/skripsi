<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_anggota', 'model');
        if ($this->session->userdata('level') !== 'Admin') {
            $this->session->set_flashdata('alert', ['type' => 'warning', 'message' => 'Anda tidak memiliki hak akses !']);
            redirect('Login');
        }
    }

    public function index($param)
    {
        unset($_SESSION['npsn']);
        unset($_SESSION['nama_sekolah']);

        $this->db->where('npsn', $param);
        $nama_sekolah = $this->db->get('sekolah')->row()->namasekolah;

        $this->session->set_userdata(array('npsn' => $param, 'nama_sekolah' => $nama_sekolah));

        $data['title'] = "Data Anggota Ekstrakurikuler";
        $this->load->view('admin/v_anggota', $data);
    }

    public function GetData()
    {

        $post = $this->input->post(NULL, true);
        $data = $this->model->GetData($post);
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
        $id = $this->input->post(null, true);
        $result = $this->model->delete($id);
        echo json_encode($result);
    }

    public function Cetak()
    {
        $data['dt'] = $this->model->Cetak($_SESSION['npsn']);
        $this->load->library('Pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "cetak.pdf";
        $this->pdf->load_view('operator/v_cetakanggota', $data);
    }
}
