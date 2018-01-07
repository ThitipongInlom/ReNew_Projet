<?php  
class Choose 
{
    public function __construct() 
    {
        $this->CI = & get_instance();
        $this->CI->load->database();
        $this->CI->load->library('session');
        $this->CI->load->model('Get_airlink_model');
    }

    public function Choose_user($data,$Mikrotik)
    {
    	$result = $this->CI->Get_airlink_model->unpack_serialize($data->profile);

    	$this->CI->db->where("(Level_Below_data='".$Mikrotik['username']."' OR Level_Below_data='".$result['billingplan']."')", NULL, FALSE);
    	$query = $this->CI->db->get('set_level_below');
    	$row = $query->num_rows();
    	// $row == 1  Go To Return
    	if ($row ==1) {
            $query = $this->CI->db->get_where('maclock', array('mac' => $Mikrotik['mac']));
            $rowch = $query->num_rows();
            if ($rowch =='1') {
                //session_unset();
                //$this->session->sess_destroy();
                header("Location:  http://172.16.1.14/renew/index.php/Pomo/");
            }else{
            $querytime = $this->CI->db->get('time_set');  
            $settime = $querytime->result();
            $today = date("Y-m-d H:i:s");
            $data = array(
            'mac' => $Mikrotik['mac'],
            'username' => $Mikrotik['username'],
            'maclock_check' => $today);
            $this->CI->db->insert('maclock', $data);
            return $row;
            }
    	}else{
            //session_unset();
            //$this->session->sess_destroy();
            header("Location:  http://172.16.1.14/renew/index.php/Pomo/");
    	}	
    }


}
?>