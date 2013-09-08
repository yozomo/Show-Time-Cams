<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Watch extends CI_Controller {

	public function index() 
	{
		$data['main_content'] = 'watch';
		$this->load->view('includes/template', $data);	
	}
}

?>