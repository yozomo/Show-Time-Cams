<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index() 
	{
		$this->load->model('action_model');
		if (isset($_POST['submit'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class="alert alert-warning">', '</p>');
			$this->form_validation->set_rules('display_name', 'Display Name', 'trim|required|min_length[2]|max_length[26]|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|xss_clean');
			$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|min_length[5]|max_length[26]|xss_clean');
				if ($this->form_validation->run() == FALSE) {
					$data['broadcast_status'] = $this->action_model->broadcast_status();
					$data['main_content'] = 'signup';
					$this->load->view('includes/template', $data);	
				} else {
					$checkname = $this->action_model->display_name_check();
						if ($checkname) {
							$data['messageName'] = "<p class=\"alert alert-warning\">The Display Name is unavailable at this time, Please choose another.</p>";
							$data['broadcast_status'] = $this->action_model->broadcast_status();
							$data['main_content'] = 'signup';
							$this->load->view('includes/template', $data);
						} else {
							$insert = $this->action_model->insert_user();
							$data['broadcast_status'] = $this->action_model->broadcast_status();
							$data['model_category'] = $this->action_model->model_category();
							$data['main_content'] = 'login';
							$this->load->view('includes/template', $data);						
						}
				}
		} else {
			$data['broadcast_status'] = $this->action_model->broadcast_status();
			$data['main_content'] = 'signup';
			$this->load->view('includes/template', $data);
		}	
	}

	public function unique_display_name()
	{
		$this->load->model('action_model');
		$check = $this->action_model->display_name_check();
		if ($check) {
			echo "1";
		} else {
			echo "0";
		}
	}

	public function unique_email_address()
	{
		$this->load->model('action_model');
		$check = $this->action_model->email_address_check();
		if ($check) {
			echo "1";
		} else {
			echo "0";
		}
	}

}

?>