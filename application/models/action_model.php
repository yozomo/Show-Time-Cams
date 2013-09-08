<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Action_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

	function check_user() {
		$email_address = strtolower(strip_tags($this->input->post('email_address')));
		$email_address = str_replace(' ', '', $email_address);
		$email_address = preg_replace('/\s+/', '', $email_address);
		$password = strip_tags($this->input->post('password'));
		$password = str_replace(' ', '', $password);
		$password = preg_replace('/\s+/', '', $password);
		$password = hash('sha512', $password);

		$this->db->where('email_address', $email_address);
		$this->db->where('password', $password);
		$this->db->where('active', '1');
		$query = $this->db->get('user_account');
		if ($query->num_rows == 1) {
			$this->db->where('email_address', $email_address);
			$this->db->where('password', $password);
			$this->db->where('active', '1');
			$users = $this->db->get('user_account');
			foreach ($users->result() as $user) {
				$uid = $user->uid;
				$display_name = $user->display_name;
				$email_address = $user->email_address;
					$setdata = array(
						'owner_id' => $uid,
						'display_name' => $display_name,
						'email_address' => $email_address,
						'logged_in' => TRUE
					);
					$this->session->set_userdata($setdata);
			}
			return TRUE;
		}
	}

	function display_name_check()
	{
		$display_name = strtolower(strip_tags($this->input->post('display_name')));
		$this->db->select('display_name');
		$this->db->from('user_account');
		$this->db->where('display_name', $display_name);
		$this->db->where('active', '1');
		$query = $this->db->get();
			if ($query->num_rows == 1) {
				return TRUE;
			}
	}

	function email_address_check()
	{
		$email_address = strtolower(strip_tags($this->input->post('email_address')));
		$this->db->select('email_address');
		$this->db->from('user_account');
		$this->db->where('email_address', $email_address);
		$this->db->where('active', '1');
		$query = $this->db->get();
			if ($query->num_rows == 1) {
				return TRUE;
			}	
	}

    function insert_user() 
    {
 		$now_unix = date('U');
		$ip = $_SERVER['REMOTE_ADDR'];
		$display_name = strtolower(strip_tags($this->input->post('display_name')));
		$password = strip_tags($this->input->post('password'));
		$password = str_replace(' ', '', $password);
		$password = preg_replace('/\s+/', '', $password);
		$password = hash('sha512', $password);
		$email_address = strtolower(strip_tags($this->input->post('email_address')));
		$email_address = str_replace(' ', '', $email_address);
		$email_address = preg_replace('/\s+/', '', $email_address);
		$insert = array(
			'display_name' => $display_name,
			'password' => $password,
			'email_address' => $email_address,
			'active' => '1',
			'ip_address' => $ip,
			'a_unix' => $now_unix,
			'm_unix' => $now_unix
		);
		$insert_user_account = $this->db->insert('user_account', $insert);
		$insert = array(
			'display_name' => $display_name,
			'password' => $password,
			'active' => '0',
			'broadcast' => 0,
			'ip_address' => $ip,
			'a_unix' => $now_unix,
			'm_unix' => $now_unix
		);
		$insert_broadcast_account = $this->db->insert('broadcast_account', $insert);
    }

    function broadcast_status()
    {
 		$owner_id = $this->session->userdata('owner_id');
		$this->db->select('broadcast');
		$this->db->from('broadcast_account');
		$this->db->where('bid', $owner_id);
		$status = $this->db->get();
		return $status;   	
    }

    function update_broadcast()
    {
		$owner_id = $this->session->userdata('owner_id');
		$this->db->select('broadcast');
		$this->db->from('broadcast_account');
		$this->db->where('bid', $owner_id);
		$statuses = $this->db->get();
			foreach ($statuses->result() as $status) {
				$stat = $status->broadcast;
				if ($stat == '0') {
					$stat = '1';
				} elseif ($stat == '1') {
					$stat = '0';
				} else {
					$stat = '0';
				}
				$data = array(
					'broadcast' => $stat
				);
				$this->db->where('bid', $owner_id);
				$this->db->update('broadcast_account', $data);
			}
    }

    function model_category()
    {
		$this->db->select('*');
		$this->db->from('model_category');
		$this->db->limit('6');
		$model_category = $this->db->get();
		return $model_category;
    }

}

?>