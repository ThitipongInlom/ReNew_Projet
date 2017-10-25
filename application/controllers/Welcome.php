<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();   	
		$this->load->model('Get_airlink_model');
		$this->load->model('Save_Ajax');
		$this->lang->load('message','english'); 
	}

	public function index()
	{
		$result = $this->Get_airlink_model->Get_Data_model();
		$this->load->view('welcome_message');
	}

	public function Click_No()
	{
		$this->Save_Ajax->Save_DaTa_No();
	}

	public function Click_Yes()
	{
		$this->Save_Ajax->Save_DaTa_Yes();
	}


}
