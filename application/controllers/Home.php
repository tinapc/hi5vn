<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->config('app');
	}

	public function index()
	{
		$data = [];
		$this->load->view('home', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */