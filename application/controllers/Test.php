<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index($type, $location)
	{

		$this->load->model('interests_model');

		if($location =='da-nang')
		{
			$getLatLng = '16.060556,108.196111';
		} elseif($location == 'ho-chi-minh')
		{
			$getLatLng = '10.775659,106.700424';
		} elseif($location == 'nha-trang')
		{
			$getLatLng = '12.238791,109.196749';
		} elseif($location == 'hoi-an')
		{
			$getLatLng = '15.880058,108.338047';
		}

		if($type !== 'hotel')
		{
			$places = file_get_contents('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$getLatLng.'&radius=50000&types='.$type.'&key=AIzaSyCT85LPoNCx1hAAguFkNMrvKUfrQjjq3M4');	
		} else {
			$places = file_get_contents('https://maps.googleapis.com/maps/api/place/textsearch/json?location='.$getLatLng.'&radius=50000&query='.urlencode('hotel, quận Sơn Trà').'&key=AIzaSyCT85LPoNCx1hAAguFkNMrvKUfrQjjq3M4');
		}

		//$places = file_get_contents('https://maps.googleapis.com/maps/api/place/radarsearch/json?location=16.060556,108.196111&radius=5000&types=food&key=AIzaSyCT85LPoNCx1hAAguFkNMrvKUfrQjjq3M4');
		$places = json_decode($places);

		$data = [];
		foreach ($places->results as $res) {

			if($type == 'hotel')
			{
				$address = $res->formatted_address;
			} else {
				$address = $res->vicinity;
			}

			$data[] = [
				'name'				=> $res->name,
				'slug'				=> url_title($res->name),
				'lat'				=> $res->geometry->location->lat,
				'lng'				=> $res->geometry->location->lng,
				'address'			=> $address,
				'type'				=> $type,
				'location'			=> $location,
				'place_google_id'	=> $res->place_id,
				'photo'				=> @$res->photos[0]->photo_reference,
				'user_id'			=> 1 // Admin
			];
		}

		foreach ($data as $key) {
			$this->interests_model->insert($key);
		}

	}


	public function ip2location()
	{
		// $loc = file_get_contents('http://api.ipinfodb.com/v3/ip-city/?key=4fe53897456c6d80e6bc4d0f006ef57c287e377a419da392032175ef9893abab&ip=123.19.31.156&format=json');

		// dd(json_decode($loc));
		//$buzz    = new \Buzz\Browser(new \Buzz\Client\Curl());
		//$adapter = new \Geocoder\HttpAdapter\BuzzHttpAdapter();
		$geocoder = new \Geocoder\Provider\GoogleMaps($adapter);
		$loc = $geocoder->geocode('20 Quang Trung, TP Quảng Ngãi, Việt Nam');
		dd($loc);
	}
}

/* End of file Test.php */
/* Location: .//E/projects/ci3_tut/app/controllers/Test.php */