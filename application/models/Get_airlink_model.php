<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_airlink_model extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->library('choose');
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

		// Check User
		if (empty($this->session->Mikrotik['username'])) {	
		$sql = "SELECT * FROM voucher WHERE username ='".$username."'";
		$query = $airlink->query($sql);
		$row = $query->row();
		$Mikrotik = array(
			'username' => $username, 
			'ip'       => $ip,
			'mac'      => $mac);
	    $this->Choose_user($row,$Mikrotik);
		$result = $this->unpack_serialize($row->profile);
		$this->session->set_userdata('Mikrotik', $Mikrotik);	
		$this->session->set_userdata('Data_Web', $result);
		}
		$MikrotikMac = $this->session->Mikrotik['mac'];
		$query = $this->db->get_where('maclock', array('mac' => $MikrotikMac));
        $rowch = $query->num_rows();
        $today = date("Y-m-d");
        if ($rowch =='1') {
        	$query2 = $this->db->order_by('Yes_comment_timerecheck', 'DESC')->get_where('yes_comment', array('Yes_comment_mac' => $MikrotikMac,'Yes_comment_timerecheck' => $today));
        	$rowres = $query2->num_rows();
        	if ($rowres=='0') {
        		return;
        	}else{
    		header("Location:  http://172.16.1.14/renew/index.php/Pomo/");	
        	}
        }else{
        	return;
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

	public function Choose_user($data,$Mikrotik)
    {
    	$result = $this->unpack_serialize($data->profile);

    	$this->db->where("(Level_Below_data='".$Mikrotik['username']."' OR Level_Below_data='".$result['billingplan']."')", NULL, FALSE);
    	$query = $this->db->get('set_level_below');
    	$row = $query->num_rows();
    	// $row == 1  Go To Return
    	if ($row ==1) {
            $query = $this->db->get_where('maclock', array('mac' => $Mikrotik['mac']));
            $rowch = $query->num_rows();
            if ($rowch =='1') {
            	session_unset();
            	$this->session->sess_destroy();
            	header("Location:  http://172.16.1.14/renew/index.php/Pomo/");
            }else{
            $querytime = $this->db->get('time_set');  
            $settime = $querytime->result();
            $today = date("Y-m-d");
            $data = array(
            'mac' => $Mikrotik['mac'],
            'maclock_time' => $settime[0]->time_data,
            'maclock_check' => $today);
            $this->db->insert('maclock', $data);
            return $row;
            }
    	}else{
    		session_unset();
            $this->session->sess_destroy();
    		header("Location:  http://172.16.1.14/renew/index.php/Pomo/");
    	}	
    }
	

}
?>