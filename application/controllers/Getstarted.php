<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Getstarted extends CI_Controller
{


	public function index()
	{


		if (isset($_POST['firstname'])) {
			var_dump($_POST);
			exit();

			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$message = $this->input->post('message');

			$reason = $this->input->post('reason');
			$usedbefore = $this->input->post('usedbefore');
			$alignertype = $this->input->post('alignertype');
			$concern = $this->input->post('concern');
			$appointment = $this->input->post('appointment');


			//todo: Send Enquiry and then send email 


			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/items/guidedenquiries",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => "{\"status\":\"published\",\"firstname\":\"" . $firstname . "\",\"lastname\":\"" . $lastname . "\",\"email\":\"" . $email . "\",\"phonenumber\":\"" . $phone . "\",\"message\":\"" . $message . "\",\"usedbefore\":" . $usedbefore . ",\"alignertype\":\"" . $alignertype . "\",\"concern\":\".$concern.\",\"appointment\":" . $appointment . "}",
				CURLOPT_HTTPHEADER => array(
					"cache-control: no-cache",
					"content-type: application/json",
					"postman-token: e11196bf-376e-ace5-2591-ef10340ef18d"
				),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
				echo "cURL Error #:" . $err;
				exit();
			} else {
				echo $response;
				var_dump($response);
				exit();
			}
			//todo end send of enquiry 

		}


		$this->load->view('getstarted');
	}
}
