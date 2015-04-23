<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends MY_Model {
	public function __construct()
	{

		$this->has_many['interests'] = 'interests_model';

		parent::__construct();
	}
}

/* End of file Users.php */
/* Location: ./application/modules/user/models/Users.php */