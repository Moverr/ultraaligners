<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function cmp($a, $b)
	{
		return strcmp($a->year, $b->year);
	}





	public function index()
	{
		//Load Who We Are : 
		$whoweare = $this->WhoWeAre();
		$data['whoweare'] =  $whoweare;

		$practices = $this->Practices();
		$data['practices'] =  $practices;


		$howitworks = $this->Howitworks();
		$data['howitworks'] =  $howitworks;



		


		$this->load->view('welcome_message', $data);
	}
	public function WhoWeAre()
	{


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/items/whoweare?fields=*.*,featured_image.data.full_url",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
		 	CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache",
				"content-type: application/json",
				"postman-token: 4e6aa8d8-bc27-c23e-258d-685bc8f4a276"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			return null;
		} else {
		 
			$responsedata =  json_decode($response);
 

			return  $responsedata->data;
		}
	}


	public function Practices()
	{


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/items/pratices?fields=*.*",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
		 	CURLOPT_HTTPHEADER => array(
				"cache-control: no-cache",
				"content-type: application/json",
				"postman-token: 4e6aa8d8-bc27-c23e-258d-685bc8f4a276"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			return null;
		} else {
		 
			$responsedata =  json_decode($response);
 

			return  $responsedata->data;
		}
	}

	public function Howitworks(){

	}
	
}
