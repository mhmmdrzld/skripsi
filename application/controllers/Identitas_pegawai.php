<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Identitas_pegawai extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_identitas_pegawai', 'identpeg');
    }

    public function index()
    {
        $data['title'] = "Indentitas Pegawai";
        $this->page('data_induk/identitas_pegawai', $data);
    }


    public function get_data()
    {
        $nip = $this->input->get('nip', true);
        $data = $this->identpeg->get_data($nip)->row();
        $data->PHOTO = base64_encode($data->PHOTO);
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post(null, true);
        $result =  $this->identpeg->insert($data);
        echo json_encode($result);
    }

    public function update()
    {
        $data = $this->input->post(null, true);
        $result =  $this->identpeg->update($data);
        echo json_encode($result);
    }

    public function cek_nip()
    {
        $nip = preg_replace('/\s+/', '', $this->input->get('nip_baru', TRUE));

        $this->db->where('nip', $nip);
        $query = $this->db->get('identpeg');
        if ($nip) {
            if ($query->num_rows() != 0) {
                $this->session->unset_userdata('nip');
                $this->session->set_userdata(array('nip' => $nip));
                echo json_encode(array('nip' => $nip, 'status' => 'berhasil'));
            } else {
                $this->session->unset_userdata('nip');
                echo json_encode(array('status' => 'gagal'));
            }
        }
    }
}
