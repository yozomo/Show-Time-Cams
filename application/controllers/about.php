<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index() 
	{
		$data['main_content'] = 'about';
		$this->load->view('includes/template', $data);	
	}
}

?>