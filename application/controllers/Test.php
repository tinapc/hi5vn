<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index($type, $location)
	{

		$this->load->model('interests_model');

		$places = file_get_contents('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=16.060556,108.196111&radius=500000&types='.$type.'&key=AIzaSyCT85LPoNCx1hAAguFkNMrvKUfrQjjq3M4');
		//$places = file_get_contents('https://maps.googleapis.com/maps/api/place/radarsearch/json?location=16.060556,108.196111&radius=5000&types=food&key=AIzaSyCT85LPoNCx1hAAguFkNMrvKUfrQjjq3M4');
		$places = json_decode($places);

		$data = [];
		foreach ($places->results as $res) {
			$data[] = [
				'name'				=> $res->name,
				'slug'				=> url_title($res->name),
				'lat'				=> $res->geometry->location->lat,
				'lng'				=> $res->geometry->location->lng,
				'address'			=> $res->vicinity,
				'type'				=> $type,
				'location'			=> $location,
				'place_google_id'	=> $res->place_id,
				'user_id'			=> 1 // Admin
			];
		}

		foreach ($data as $key) {
			$this->interests_model->insert($key);
		}

	}

}

/* End of file Test.php */
/* Location: .//E/projects/ci3_tut/app/controllers/Test.php */