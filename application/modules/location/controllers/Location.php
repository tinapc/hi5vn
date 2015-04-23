<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends Public_Controller {

	public $total_places = '';
	public $location_fullname = '';

	public function __construct()
	{
		parent::__construct();

		$this->load->model('interests_model');
		$this->load->model('user/users_model');

		//Prepare all data for location banner on each page
		// so we dont need to rewrite many times
		$_location = $this->uri->segment(2);
		$this->total_places = $this->interests_model->where_location($_location)->count();
		$this->total_hotels = $this->interests_model->where(['location' => $_location, 'type' => 'hotel'])->count();
		$this->location_fullname = $this->config->item('cityLists')[$_location];
	}

	public function index($location)
	{
		$data = [];

		$this->db->limit(6);
		$this->db->order_by('id', 'desc');
		$data['top_places'] = $this->interests_model->where_location($location)->with('user')->get_all();

		$data['location_url'] = base_url() . 'location/' .$location .'/';

		$this->template->title($this->location_fullname)
				->set('data', $data)
				->build('index');
	}

	public function photo($place)
	{
		$data = [];
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title($this->location_fullname, 'Photo')
				->set('data', $data)
				->build('photo');
	}

	public function place($place)
	{
		$data = [];
		$data['top_places'] = $this->interests_model->where(['location' => $place, 'type !=' => 'hotel'])->with('user')->get_all();
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title($this->location_fullname, 'Place')
				->set('data', $data)
				->build('place');
	}

	public function restaurant($place)
	{
		$data = [];
		$data['top_places'] = $this->interests_model->where(['location' => $place, 'type' => 'restaurant'])->with('user')->get_all();
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title($this->location_fullname, 'Restaurant')
				->set('data', $data)
				->build('place');
	}

	public function hotel($place)
	{
		$data = [];
		$data['top_places'] = $this->interests_model->where(['location' => $place, 'type' => 'hotel'])->with('user')->get_all();
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title($this->location_fullname, 'Hotel')
				->set('data', $data)
				->build('place');
	}

	public function place_detail($place, $entry)
	{
		$data = [];
		$data['place'] = $this->interests_model->where_slug($entry)->with('user')->get();
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title( $data['place']->name.' tại ' . $this->location_fullname)
				->set('data', $data)
				->build('place_detail');
	}

	public function photo_detail($place, $entry)
	{
		$data = [];
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title($this->location_fullname, 'Cafe Nui Da Tho Quang')
				->set('data', $data)
				->build('photo_detail');
	}


	public function widget_bannerLocation()
	{
		$this->load->view('location/widget_bannerLocation');
	}

}

/* End of file location.php */
/* Location: ./application/modules/location/controllers/location.php */