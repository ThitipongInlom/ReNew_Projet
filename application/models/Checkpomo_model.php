<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkpomo_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getpomo()
	{
		$username = $this->session->Data_Web['billingplan'];
		$query = $this->db->get_where('set_level_below', array('Level_Below_data' => $username));
		$numrow = $query->num_rows();
		return $numrow;
	}

}

?>