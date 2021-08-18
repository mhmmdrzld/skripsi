<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rberkala extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function  index()
    {
        $data['title'] = "Riwayat Gaji Berkala";
        $this->page('riwayat/pegawai/rberkala', $data);
    }
}
