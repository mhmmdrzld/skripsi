<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_master', 'model');
    }

    public function GetDataEskul()
    {
        $id = $this->input->get('id', TRUE);
        $data = $this->model->GetDataEskul($id)->result();
        echo json_encode($data);
    }
}
