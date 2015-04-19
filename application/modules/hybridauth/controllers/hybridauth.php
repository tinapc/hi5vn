<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hybridauth extends MX_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->config->load('hybridauth');
	}

	public function hybridauth_endpoint()
	{
		include APPPATH .'/vendor/hybridauth/hybridauth/hybridauth/index.php';
	}

	public function login()
	{
		
		$hybridauth = new Hybrid_Auth( $this->config->item('social') );
 		$provider = ucfirst($this->uri->segment(3));
	    $adapter = $hybridauth->authenticate('Facebook');
	 	
	    $user_profile = $adapter->getUserProfile();
	    echo "<pre>";
	    print_r($user_profile->displayName);
	    echo "</pre>";	
	}

}

/* End of file hybridauth.php */
/* Location: .//G/xampp/htdocs/projects/ci3_tut/app/controllers/hybridauth.php */