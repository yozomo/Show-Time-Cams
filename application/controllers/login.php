<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() 
	{
		$this->load->model('action_model');
		if (isset($_POST['submit'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<p class="alert alert-warning">', '</p>');
			$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|min_length[5]|max_length[26]|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|xss_clean');
				if ($this->form_validation->run() == FALSE) {
					$data['broadcast_status'] = $this->action_model->broadcast_status();
					$data['main_content'] = 'login';
					$this->load->view('includes/template', $data);	
				} else {
					$check_user = $this->action_model->check_user();
					if ($check_user) {
						$data['broadcast_status'] = $this->action_model->broadcast_status();
						$data['model_category'] = $this->action_model->model_category();
						$data['main_content'] = 'welcome';
						$this->load->view('includes/template', $data);
					} else {
						$data['messageEmail'] = "<p class=\"alert alert-warning\">The Email Address is incorrect.</p>";
						$data['messagePassword'] = "<p class=\"alert alert-warning\">The Password is incorrect.</p>";
						$data['broadcast_status'] = $this->action_model->broadcast_status();
						$data['main_content'] = 'login';
						$this->load->view('includes/template', $data);
					}
				}
		} else {
			$data['broadcast_status'] = $this->action_model->broadcast_status();
			$data['main_content'] = 'login';
			$this->load->view('includes/template', $data);
		}
	}

	public function logout() 
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}

?>