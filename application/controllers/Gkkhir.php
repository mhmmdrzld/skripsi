<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gkkhir extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Gaji Pokok Terakhir";
        $this->page('data_induk/gkkhir', $data);
    }
}
