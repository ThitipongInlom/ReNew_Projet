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
    		return $row;
    	}else{
    		header("Location:  ../popup/index.html");
    	}	
    }


}
?>