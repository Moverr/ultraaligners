<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
	public function index()
	{
		$data = array();
		$data['section'] = "default";
		$this->load->view('dashboard/dashboard', $data);
	}

	public function patients()
	{
		//todo: get Patients in the system :: 

		$this->load->library('session');
		$token = $this->session->userdata('token');
		$email = $this->session->userdata('email');
		$logged_in = $this->session->userdata('logged_in');

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/users?meta=total_count%2Cresult_count%2Cfilter_count&limit=200&offset=0&fields=role.*%2Cfirst_name.*%2Clast_name.*%2Cid&filter%5Brole%5D%5Bcontains%5D=patients",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"authorization: ".$token, 
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
			echo $response;
			$data = array();
			$data['section'] = "patients";
			$this->load->view('dashboard/dashboard', $data);
		}
	}
}
