<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();   	
		$this->load->model('Get_airlink_model');
		$this->lang->load('message','english'); 
	}

	public function index()
	{
		$result = $this->Get_airlink_model->Get_Data_model();
		//echo $result;
		//$this->load->view('welcome_message');
	}


}
