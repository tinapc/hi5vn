<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends Public_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->model('interests_model');
		$this->load->model('user/users_model');
	}
	public function index($location)
	{
		$data = [];

		$this->db->limit(6);
		$this->db->order_by('id', 'desc');
		$data['top_places'] = $this->interests_model->where_location($location)->with('user')->get_all();

		$data['location_fullname'] = $this->config->item('cityLists')[$location];
		$data['location_url'] = base_url() . 'location/' .$location .'/';

		$this->template->title($data['location_fullname'])
				->set('data', $data)
				->build('index');
	}

	public function photo($place)
	{
		$data = [];
		$data['location_fullname'] = $this->config->item('cityLists')[$place];
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title($data['location_fullname'], 'Photo')
				->set('data', $data)
				->build('photo');
	}

	public function place($place)
	{
		$data = [];
		$data['top_places'] = $this->interests_model->where_location($place)->with('user')->get_all();
		$data['location_fullname'] = $this->config->item('cityLists')[$place];
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title($data['location_fullname'], 'Place')
				->set('data', $data)
				->build('place');
	}

	public function place_detail($place, $entry)
	{
		$data = [];
		$data['place'] = $this->interests_model->where_slug($entry)->with('user')->get();
		$data['location_fullname'] = $this->config->item('cityLists')[$place];
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title( $data['place']->name.' tại ' . $data['location_fullname'])
				->set('data', $data)
				->build('place_detail');
	}

	public function photo_detail($place, $entry)
	{
		$data = [];
		$data['location_fullname'] = $this->config->item('cityLists')[$place];
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title($data['location_fullname'], 'Cafe Nui Da Tho Quang')
				->set('data', $data)
				->build('photo_detail');
	}

}

/* End of file location.php */
/* Location: ./application/modules/location/controllers/location.php */