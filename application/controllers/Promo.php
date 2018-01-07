<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();   	
		$this->load->model('Checkpomo_model');
		$this->lang->load('message','english'); 
	}

	public function index()
	{
		$result = $this->Checkpomo_model->getpomo();
		$data = array('checkrow' => $result);
		$this->load->view('pomo',$data);
	}

	public function blackcomment()
	{
		$this->load->view('welcome_message2');
	}

}

?>