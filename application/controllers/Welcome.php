<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function WhoWeAre()
	{


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/items/whoweare?fields=*.*",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_POSTFIELDS => "{\"status\":\"active\",\"first_name\":\"karma\",\"last_name\":\"karma\",\"email\":\"karma1sx2@mov.com\",\"role\":\"5\",\"password\":\"passme\",\n\"token\":\"536252\"\n\t\n\t\n}",
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
			return  $response;
		}
	}
}
