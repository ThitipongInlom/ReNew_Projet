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
			$data = array(
			'No_comment_level' => $Level,	
        	'No_comment_room' => $this->session->Data_Web['room'],
       		'No_comment_Name' => $this->session->Data_Web['firstname'],
       		'No_comment_Mac'  => $this->session->Mikrotik['mac'],
       		'No_comment_instay' => $this->session->Data_Web['inout'],
       		'No_comment_Time' => $today);
			$this->db->insert('no_comment', $data);
			echo $this->lang->line('thank_you');
		}	

	public function Save_DaTa_Yes()
		{
			$today = date("Y-m-d H:i:s");
		}	

}
?>