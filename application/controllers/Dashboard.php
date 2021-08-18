<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard', 'dasboard');
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$this->page('dashboard/index', $data);
	}
}
