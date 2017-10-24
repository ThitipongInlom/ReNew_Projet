<?php  
class Choose 
{
    public function __construct() 
    {
        $this->CI = & get_instance();
        $this->CI->load->database();
        $this->CI->load->library('session');
        $this->CI->load->model('Get_airlink_model');
        $this->CI->load->model('Get_set_choose');
    }

    public function Choose_user($data)
    {
    	$result = $this->CI->Get_airlink_model->unpack_serialize($data->profile);
    	$this->CI->db->select('*');
        $this->CI->db->from('set_level_below');
        $query = $this->CI->db->get();
        foreach ($query->result_array() as $row)
		{	

			
		};	
	//print_r($this->CI->session->username);	
    }

}
?>