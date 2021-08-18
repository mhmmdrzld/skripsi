<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Photo extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Photo";
        $this->page('data_induk/photo', $data);
    }
}
