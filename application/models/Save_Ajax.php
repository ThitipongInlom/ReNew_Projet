<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Save_Ajax extends CI_Model {

	public function __construct()
		{
			parent::__construct();
		}	

	public function Save_DaTa_No()
		{
			$Level = $this->input->post('data_send');
			$today = date("Y-m-d H:i:s");
        	$time = date('Y-m-d');
			$data = array(
			'Yes_comment_level' => $Level,	
			'Yes_comment_username' => $this->session->Mikrotik['username'],
        	'Yes_comment_room' => $this->session->Data_Web['room'],
        	'Yes_comment_grop' => $this->session->Data_Web['billingplan'],
       		'Yes_comment_name' => $this->session->Data_Web['firstname'],
       		'Yes_comment_country'=> $this->session->Data_Web['country'],
       		'Yes_comment_mac'  => $this->session->Mikrotik['mac'],
       		'Yes_comment_instay' => $this->session->Data_Web['inout'],
       		'Yes_comment_type' => '0',
       		'Yes_comment_timerecheck' => $time,
       		'Yes_comment_time' => $today);
			$this->db->insert('no_comment', $data);
		}	

	public function Save_DaTa_Yes()
		{
			$Level = $this->input->post('data_check');
			$roombox = $this->input->post('room');
			$spa = $this->input->post('spa');
			$fitness = $this->input->post('fitness');
			$restaurant = $this->input->post('restaurant');
			$other = $this->input->post('other');
			$detail = $this->input->post('detail');
			$textother = $this->input->post('text_other');
			$today = date("Y-m-d H:i:s");
			$time = date('Y-m-d');
			$data = array(
			'Yes_comment_level'  => $Level,
			'Yes_comment_username' => $this->session->Mikrotik['username'], 
			'Yes_comment_name'   => $this->session->Data_Web['firstname'],
			'Yes_comment_room'   => $this->session->Data_Web['room'],
			'Yes_comment_grop'   => $this->session->Data_Web['billingplan'],
			'Yes_comment_roombox'=> $roombox,
			'Yes_comment_spa'    => $spa,
			'Yes_comment_fitness'=> $fitness,
			'Yes_comment_restaurant' => $restaurant,
			'Yes_comment_other'  => $other,
			'Yes_comment_emp_id' => $this->session->Data_Web['personal_id'],
			'Yes_comment_country'=> $this->session->Data_Web['country'],
			'Yes_comment_instay' => $this->session->Data_Web['inout'],
			'Yes_comment_web'    => $this->session->Data_Web['web'],
			'Yes_comment_type' => '1',
			'Yes_comment_time'   => $today,
			'Yes_comment_timerecheck' => $time,
			'Yes_comment_mac'    => $this->session->Mikrotik['mac'],
			'Yes_comment_text_other' => $textother,
			'Yes_comment_detail' => $detail);
			$this->db->insert('yes_comment', $data);
			echo $this->lang->line('thank_you');
		}	

}
?>