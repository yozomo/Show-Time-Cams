<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index() 
	{
		$this->load->model('action_model');
		$data['broadcast_status'] = $this->action_model->broadcast_status();
		$data['main_content'] = 'account';
		$this->load->view('includes/template', $data);	
	}

	public function update_broadcast()
	{
		$this->load->model('action_model');
		$update = $this->action_model->update_broadcast();
	}
}

?>