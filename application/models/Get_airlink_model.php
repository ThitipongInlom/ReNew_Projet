<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_airlink_model extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			$this->load->library('choose');
		}	

	public function Get_Data_model()
	{
		$airlink = $this->load->database('airlink', TRUE);
		$mac = $this->input->post('mac');
		$ip  = $this->input->post('ip');
		$username = $this->input->post('username');
		
		$sql = "SELECT * FROM voucher WHERE username ='".$username."'";
		$query = $airlink->query($sql);
		$row = $query->row();
		$Mikrotik = array(
			'username' => $username, 
			'ip'       => $ip,
			'mac'      => $mac);
		$this->session->set_userdata('Mikrotik', $Mikrotik);
		$this->choose->Choose_user($row);
		if ($username == 'nu-it' or $username == '86765') {
		$result = $this->unpack_serialize($row->profile);	
		$this->session->set_userdata('Data_Web', $result);
		return;
		}else{
		header("Location:  ../popup/index.html");
		}

	}

	public function unpack_serialize($data)
	{
	$row = unserialize($data);
	$resultnode = $this->preg_match_node($row['note']);
	$data = array(
    			'billingplan' => $row['billingplan'],
    			'personal_id' => $row['personal_id'],
    			'firstname'   => $row['firstname'],
    			'room'        => $resultnode['room'],
    			'country'     => $resultnode['country'],
    			'inout'       => $resultnode['inout'],
    			'web'         => $resultnode['web']);
	return $data;
	}

	public function preg_match_node($data)
	{
		$node = $data;
		if ($node!='') {
		preg_match("/^(....) (....) (.......................) (.*)/", $node, $outnote);
		$node_data = array(
			'room' => $outnote[1], 
			'country' => $outnote[2],
			'inout' => $outnote[3],
			'web' => $outnote[4]);
		return $node_data;
		}else{
		$node_data = array(
			'room' => '', 
			'country' => '',
			'inout' => '',
			'web' => '');	
		return $node_data;
		}
	}
	

}
?>