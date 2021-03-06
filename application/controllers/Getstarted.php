<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Getstarted extends CI_Controller
{


	public function index()
	{

		$data  = [];

		if (isset($_POST['firstname'])) {
		 

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
				CURLOPT_POSTFIELDS => "{\"status\":\"published\",\"firstname\":\"" . $firstname . "\",\"lastname\":\"" . $lastname . "\",\"email\":\"" . $email . "\",\"phonenumber\":\"" . $phone . "\",\"message\":\"" . $message . "\",\"usedbefore\":" . (strtoupper($usedbefore) == "NO" ? true : false) . ",\"alignertype\":\"" . $alignertype . "\",\"concern\":\".$concern.\",\"appointment\":" . (strtoupper($appointment) == "NO" ? false : true) . "}",
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
				$data['success'] = "Message Sent succesfully";
			}
			//todo end send of enquiry 

		}


		$this->load->view('getstarted', $data);
	}
	private function sendEmail()
	{

		@$this->load->library('email');
		@$this->email->from('moverr@gmail.com', 'Identification');
		@$this->email->to('moverr@gmail.com');
		@$this->email->subject('Send Email Codeigniter');
		@$this->email->message('The email send using codeigniter library');
		@$this->email->send();
	}
}
