<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->template->set_partial('sidebar', 'partial/sidebar');
	}
	public function index()
	{
		$this->template->title('Welcome Hi5 Vietnam')
			->set('content', 'I am CodeIniter 3')
			->build('welcome_index');
	}

	public function profile($slug, $id = NULL)
	{
		$data = ['slug' => $slug, 'id' => $id];
		$this->template->title($slug)
			->set('content', $data)
			->build('welcome_profile');
	}

}

/* End of file Welcome.php */
/* Location: ./application/modules/welcome/controllers/Welcome.php */