<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotion_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_data()
	{
		$query = $this->db->get("promotion");
		$result = $query->result();
		return $result;
	}

	

}

/* End of file promotion_model.php */
/* Location: ./application/models/promotion_model.php */
?>