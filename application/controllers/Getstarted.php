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
			$reason = $this->input->post('reason');
			$usedbefore = $this->input->post('usedbefore');
			$alignertype = $this->input->post('alignertype');
			$concern = $this->input->post('concern');

		 
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/items/guidedenquiries",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "POST",
				CURLOPT_POSTFIELDS => "{\"status\":\"published\",\"straightening_your_teeth\":\"dd\",\"ever_used_braces\":\"dd\",\"concern\":\"dd\",\"product\":\"dd\",\"appointment\":true,\"email\":\"moverr@gmail.com\",\"firstname\":\"Muyinda\",\"lastname\":\"Rogers\",\"phonenumber\":\"+256779820962\",\"details\":\"addd\"}",
				CURLOPT_HTTPHEADER => array(
					"cache-control: no-cache",
					"content-type: application/json",
					"postman-token: 102a608d-79cc-8ee6-456a-dc1f94429917"
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
		}
		https: //ultraaligners.com/public/ultraaligners/items/guidedenquiries	
		//odo: send notification. check to see that mandatories are there. 


		$this->load->view('getstarted');
	}
}
