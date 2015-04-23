<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Controller extends MX_Controller {

	public function __construct()
	{
		parent::__construct();

		// Load config app
		$this->load->config('app');

		$this->output->enable_profiler($this->config->item('debug'));

		// Set general block for Master template
		$this->template->set_partial('header', 'partial/header');
	}

}

/* End of file Public_Controller.php */
/* Location: ./application/core/Public_Controller.php */