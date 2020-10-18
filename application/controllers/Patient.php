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
	public function index()
	{
		if (isset($_POST['firstname'])) {
			//todo:
			$data = filter_forwarded_data($this);

			$username = $this->input->post('email');
			$password = $this->input->post('password');

			$first_name = $this->input->post('firstname');
			$last_name = $this->input->post('lastname');
			$email = $this->input->post('email');
			$role = "5";
			$password = $this->input->post('password');



			
		} else {
			$data = array();
			$data['section'] = "patient_form";
			$this->load->view('dashboard/dashboard', $data);
		}
	}
}
