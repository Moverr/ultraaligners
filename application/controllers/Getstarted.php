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
				CURLOPT_POSTFIELDS => "{\"status\":\"published\",\"firstname\":\"Muyinda\",\"lastname\":\"Rogers\",\"email\":\"moverr@gmail.com\",\"phonenumber\":\"+256779820962\",\"message\":\"Thehaea\",\"usedbefore\":true,\"alignertype\":\"eaeae\",\"concern\":\"aeeaea\",\"appointment\":true}",
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
			} else {
				echo $response;
			}
			//todo end send of enquiry 

		}


		$this->load->view('getstarted');
	}
}
