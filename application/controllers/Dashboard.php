<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('warga_m');
	}

	public function index()
	{
		$data['warga_lk'] = $this->warga_m->warga_lk();
		$data['warga_pr'] = $this->warga_m->warga_pr();
		$this->template->load('template', 'dashboard', $data);
	}
}
