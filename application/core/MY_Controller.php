<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('status')) {
            $this->session->set_flashdata('alert', ['type' => 'warning', 'message' => 'Anda Belum Masuk !']);
            redirect('Login');
        }
    }
}
