<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_user', 'user');
    }


    public function index() //halaman user
    {

        $items    = $this->menu->get_items();
        $menu    = $this->user->generate_menu_hak_akses($items);
        $data['title'] = "Data Pengguna";
        $data['list_menu'] = $menu;
        $data['items'] = $items;

        $this->page('admin/v_user', $data);
    }

    public function get_user()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->user->get_user($id)->result();
        echo json_encode($data);
    }

    public function get_menu_id_by_iduser($id)
    {
        $data = $this->user->get_menu_id_by_iduser($id);
        $list_menu = explode("|", $data['RIGHTS']);
        echo json_encode($list_menu);
    }

    public function get_all_menu($id = NULL)
    {
        $data = $this->user->get_all_menu($id);
        echo json_encode($data);
    }

    public function insert($status = 'insert')
    {

        $input_menu = $this->input->post('menus', TRUE);
        $id_user = $this->input->post('id_user', TRUE);
        $jumlah_menu = count($input_menu);

        (($jumlah_menu == 0) ? $menu = "" : $menu = implode("|", $input_menu));

        if ($status == 'update') {
            $data = array(
                'RIGHTS' => $menu
            );

            if ($this->user->update($data, $id_user)) {
                $this->session->set_flashdata('alert', ['type' => 'success', 'message' => 'Data Berhasil Disimpan']);
            } else {
                $this->session->set_flashdata('alert', ['type' => 'error', 'message' => 'Data Gagal Disimpan']);
            }
        } else {
            $key = $this->config->item('encryption_key');

            $password = $this->input->post('password', TRUE);
            $salt1 = hash('sha512', $key . $password);
            $salt2 = hash('sha512', $password . $key);
            $salt1_salt2 = hash('sha512', $salt1 . $password . $salt2);
            $hashed_password = md5($salt1_salt2);

            $data = array(
                'RIGHTS' => $menu,
                'USERNAME' => $this->input->post('username', TRUE),
                'PASSWORD' => $hashed_password
            );

            if ($this->user->insert($data)) {
                $this->session->set_flashdata('alert', ['type' => 'success', 'message' => 'Data Berhasil Disimpan']);
            } else {
                $this->session->set_flashdata('alert', ['type' => 'error', 'message' => 'Data Gagal Disimpan']);
            }
        }
    }
}
