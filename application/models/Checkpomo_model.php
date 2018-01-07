<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkpomo_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getpomo()
	{
		$grop = $this->session->Data_Web['billingplan'];
		$user = $this->session->Mikrotik['username'];
		$where = "Level_Below_data LIKE '$grop' OR  Level_Below_data LIKE '$user'";
		$query = $this->db->query("SELECT * FROM `set_level_below` WHERE `Level_Below_data` LIKE '$grop' OR `Level_Below_data` LIKE '$user'");
		$numrow = $query->num_rows();
		return $numrow;
	}

}

?>