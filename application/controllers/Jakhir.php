<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jakhir extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_jakhir', 'jakhir');
    }

    public function index()
    {
        $data['title'] = "Jabatan Terakhir";
        $this->page('data_induk/jakhir', $data);
    }

    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->jakhir->get_data($nip)->row();
        // $data->PHOTO = base64_encode($data->PHOTO);

        // if ($data->TSKJABAT) {
        //     $data->TSKJABAT = date("d-m-Y", strtotime($data->TSKJABAT));
        // }
        // if ($data->TGL_BAPERTARUM) {
        //     $data->TGL_BAPERTARUM = date("d-m-Y", strtotime($data->TGL_BAPERTARUM));
        // }
        echo json_encode($data);
    }
}
