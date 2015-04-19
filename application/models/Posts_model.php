<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Posts_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();

        $this->table = 'user';
        $this->primary = 'user_id';
        $this->return_as = 'array';
	}
}
/* End of file '/Posts_model.php' */
/* Location: ./application/models//Posts_model.php */