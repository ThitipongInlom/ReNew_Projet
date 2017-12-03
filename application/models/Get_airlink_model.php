<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_airlink_model extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->library('choose');
		}

	public function Check_Post()
		{
			if (empty($_POST) or empty($this->session->Mikrotik)) {
				header("Location:  ../popup/index.html");
			}else{
				return;
			}
		}

	public function Check_mobile()
			{
			$browser = $this->agent->browser();
			$mobile = $this->agent->mobile();
			$platform = $this->agent->platform();
			if ($platform == 'iOS') {
				//$this->ios_Go();
				return;
				//redirect('Ios/index', 'refresh');
			}else{
				return;
			}

			}		

	public function ios_Go()
				{	
					echo $this->session->sess_destroy();
					//header("Location:  ../popup/index.html");
					redirect('Ios/index', 'refresh');
				}			

	public function Get_Data_model()
	{
		$browser = $this->agent->browser();
		$mobile = $this->agent->mobile();
		$platform = $this->agent->platform();
		$airlink = $this->load->database('airlink', TRUE);
		$mac = $this->input->post('mac');
		$ip  = $this->input->post('ip');
		$username = $this->input->post('username');

		// Check Mobile
		$this->Check_mobile();

		// Check User
		if (empty($this->session->Mikrotik)) {
		$sql = "SELECT * FROM voucher WHERE username ='".$username."'";
		$query = $airlink->query($sql);
		$row = $query->row();
		$Mikrotik = array(
			'username' => $username, 
			'ip'       => $ip,
			'mac'      => $mac);
	    $this->choose->Choose_user($row,$Mikrotik);
		$result = $this->unpack_serialize($row->profile);
		$this->session->set_userdata('Mikrotik', $Mikrotik);	
		$this->session->set_userdata('Data_Web', $result);
		$this->Check_Post();
		}
		
		//AND isset($this->session->relogin)
		//print_r($this->session->all_userdata());
		if ($this->session->Mikrotik AND $this->session->choose =='0') {
			return;
		}
		else{
			//print_r($this->session->all_userdata());
			//return;
			echo "<script>window.location = '../popup/index.html';</script>";
			//header("Location:  ../popup/index.html");
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