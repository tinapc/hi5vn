<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Posts extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_all()
	{
		return ('This is your first application');
	}
}
/* End of file '/Posts.php' */
/* Location: ./application/models//Posts.php */