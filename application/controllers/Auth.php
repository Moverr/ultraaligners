<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
		if (isset($_POST['username'])) {
			$data = filter_forwarded_data($this);
			var_dump(($this->input->post('username')));

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($username != "" && $password != "") {
				//todo: send email to backend


				$curl = curl_init();

				curl_setopt_array($curl, array(
					CURLOPT_URL => "https://ultraaligners.com/public/ultraaligners/auth/authenticate",
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_ENCODING => "",
					CURLOPT_MAXREDIRS => 10,
					CURLOPT_TIMEOUT => 30,
					CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST => "POST",
					CURLOPT_POSTFIELDS => "{\"email\":\"moverr@gmail.com\",\"password\":\"P@ssword?123\",\"mode\":\"token\"}",
					CURLOPT_HTTPHEADER => array(
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
				}
			}

			$this->load->view('auth/login');
		} else {
			$this->load->view('auth/login');
		}
	}
}
