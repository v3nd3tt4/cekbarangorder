<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//class untuk halaman utama

class Dashboardorder extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
	}

	function index(){
		$data = array(
			'page' => 'dashboard',
			'link' => 'dashboard_utama',
		);
		$this->load->view('template_admin_v2/template/wrapper', $data);
	}
}