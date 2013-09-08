<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() 
	{
		$this->load->model('action_model');
		$data['broadcast_status'] = $this->action_model->broadcast_status();
		$data['model_category'] = $this->action_model->model_category();
		$data['main_content'] = 'welcome';
		$this->load->view('includes/template', $data);	
	}
}

?>