<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Patient extends CI_Controller
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
	public function edit($id){
		$data = array();
			$data['section'] = "patient_form";
			$this->load->view('dashboard/dashboard', $data);
	}

	public function del($id){
		redirect(base_url() . "dashboard/patients");
	}

	public function search($searchquery){
		redirect(base_url() . "dashboard/patients");
	}


	public function index()
	{
		$this->load->library('session');
		$token = $this->session->userdata('token');
		if(!isset($token)){
			redirect(base_url() . "auth");
		}

		if (isset($_POST['firstname'])) {
			//todo:
			$data = filter_forwarded_data($this);

			$username = $this->input->post('email');
			$password = $this->input->post('password');

			$first_name = $this->input->post('firstname');
			$last_name = $this->input->post('lastname');		 
			$role = "5";
			  $random_string = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90));
			 

			 

			if( $_POST['firstname'] == "" ||  $_POST['lastname'] == ""  ){
				//todo: make it succesful
				$data = array();
				$data['section'] = "patient_form";
				$data['error'] = "Fill in the mandatory fields ";
				$this->load->view('dashboard/dashboard', $data);
			}else{

				$curl = curl_init();

				curl_setopt_array($curl, array(
					CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/users",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "POST",
				//	CURLOPT_POSTFIELDS => "{\"status\":\"active\",\"first_name\":\"".$first_name."\",\"last_name\":\"".$last_name."\",\"email\":\"".$username."\",\"role\":\"".$role."\",\"password\":\"".$password."\",\"token\":\"".$random_string."\"}",
					CURLOPT_POSTFIELDS => "{\"status\":\"active\",\"first_name\":\"".$_POST['firstname']."\",\"last_name\":\"".$_POST['lastname']."\",\"email\":\"".$username."\",\"role\":\"".$role."\",\"password\":\"".$password."\",\n\"token\":\"".$random_string."\"\n\t\n\t\n}",

				
					CURLOPT_HTTPHEADER => array(
						"authorization:bearer ".$token,
						"cache-control: no-cache",
						"content-type: application/json"

					),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				if($err){
					echo "..............................";
					var_dump($err);
				}
				else{
				
					$resp_err = json_decode($response);
					if (isset($resp_err->error->message)) {
						$data['error'] =  $resp_err->error->message;
						$data['section'] = "patient_form";
						$this->load->view('dashboard/dashboard', $data);
					} else{
						redirect(base_url() . "dashboard/patients");
					}
						
				}
				
			}

			 

		} else {
			$data = array();
			$data['section'] = "patient_form";
			$this->load->view('dashboard/dashboard', $data);
		}
	}
}
