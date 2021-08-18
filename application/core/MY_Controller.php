<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_menu', 'menu');
        if (!$this->session->userdata('id_akun')) {
            $this->session->set_flashdata('alert', ['type' => 'warning', 'message' => 'Sesi Berakhir, Mohon Login Ulang!']);
            redirect('Login');
        }
    }

    public function page($page = NULL, $data = NULL)
    {
        $rights    = $this->menu->get_rights($this->session->userdata('id_akun'));
        foreach ($rights as $dataz) {
            $dataz['RIGHTS'];
        }

        $items    = $this->menu->get_items(explode("|", $dataz['RIGHTS']));
        $menu    = $this->menu->generateTrees($items);

        $header = array(
            'menu' => $menu,
        );
        $this->load->view('template/header', $header);
        $this->load->view($page, $data);
        $this->load->view('template/footer');
    }

   
}
