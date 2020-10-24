<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Appointment extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function edit($id)
	{
		$data = array();
		$data['section'] = "patient_form";
		$this->load->view('dashboard/dashboard', $data);
	}

	public function del($id)
	{
		redirect(base_url() . "dashboard/patients");
	}

	public function search()
	{
		//todo: get Patients in the system :: 
		$quesry = 	$this->input->get('search', TRUE);
		$this->load->library('session');
		$token = $this->session->userdata('token');
		//echo $token;
		$email = $this->session->userdata('email');
		$logged_in = $this->session->userdata('logged_in');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/items/appointments?meta=total_count,result_count,filter_count&limit=200&offset=0&fields=*.*&q=" . $quesry . "",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"authorization:bearer " . $token,
				"cache-control: no-cache",
				"content-type: application/json"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$responsedata =  json_decode($response);
			//var_dump($responsedata);


			$data = array();
			$data['section'] = "appointments";
			$data['meta'] = $responsedata->meta;
			$data['data'] = $responsedata->data;
			if (!isset($data['data'])) {
				redirect(base_url() . "auth");
			} else {
				$this->load->view('dashboard/dashboard', $data);
			}
		}
	}


	public function index()
	{
		$this->load->library('session');
		$token = $this->session->userdata('token');
		if (!isset($token)) {
			redirect(base_url() . "auth");
		}


		if (isset($_POST)) {
			$data = $_POST;
		}


		if (isset($_POST['patient'])) {
			//todo:


			$patient = $_POST['patient'];
			$title = $_POST['title'];
			$details = $_POST['details'];
			$start_date = $_POST['start_date'];

			$datetime =  new DateTime($start_date);
			$start_date =  $datetime->format('Y-m-d H:i:s');
			$duration = $_POST['duration'];


			if ($patient == "" ||  $title == "") {
				//todo: make it succesful			 
				$data['section'] = "patient_form";
				$data['error'] = "Fill in the mandatory fields ";
				$this->load->view('dashboard/dashboard', $data);
			} else {

				$curl = curl_init();

				curl_setopt_array($curl, array(
					CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/items/appointments",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "POST", 
					CURLOPT_POSTFIELDS => "{\"status\":\"published\",\"patient\":\"" . $patient . "\",\"title\":\"" . $title . "\",\"details\":\"" . $details . "\",\"duration\":\"" . $duration . "\",\"start_date\":\"" . $start_date . "\"\n\t\n\t\n}",

					//		{"status":"published","patient":"4","title":"ertytuiu","details":"<p>rtyuikkk</p>","duration":"2","start_date":"2020-10-24 03:34:00"}

					CURLOPT_HTTPHEADER => array(
						"authorization:bearer " . $token,
						"cache-control: no-cache",
						"content-type: application/json"

					),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				if ($err) {
					echo "..............................";
					var_dump($err);
				} else {

					$resp_err = json_decode($response);
					if (isset($resp_err->error->message)) {
						$data['error'] =  $resp_err->error->message;
						$data['section'] = "appointment_form";
						$this->load->view('dashboard/dashboard', $data);
					} else {
						redirect(base_url() . "dashboard/appointments");
					}
				}
			}
		} else {


			var_dump($data);

			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/users?meta=total_count,result_count,filter_count&limit=1000&offset=0&fields=*.*,role.*,first_name.*,last_name.*,email.*,id&filter[role][contains]=patients",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"authorization:bearer " . $token,
					"cache-control: no-cache",
					"content-type: application/json"
				),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);
			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
				$responsedata =  json_decode($response);
				//	var_dump($responsedata); 

				$data['meta'] = $responsedata->meta;
				$data['data'] = $responsedata->data;

				if (!isset($data['data'])) {
					redirect(base_url() . "auth");
				}
			}


			$data['section'] = "appointment_form";
			$this->load->view('dashboard/dashboard', $data);
		}
	}
}
