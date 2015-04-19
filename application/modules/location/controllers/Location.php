<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends Public_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index($location)
	{
		$data = [];
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
		$data['location_fullname'] = $this->config->item('cityLists')[$place];
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title($data['location_fullname'], 'Place')
				->set('data', $data)
				->build('place');
	}

	public function place_detail($place, $entry)
	{
		$data = [];
		$data['location_fullname'] = $this->config->item('cityLists')[$place];
		$data['location_url'] = base_url() . 'location/' .$place .'/';

		$this->template->title('Cafe Nui Da Tho Quang tại ' . $data['location_fullname'])
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