<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Front_Controller {

	//--------------------------------------------------------------------
	
	public function index() 
	{
		$this->load->helper('html');
		//$this->load->model('service_model', null, true);
		$data = array();
		//$data['services'] = $this->service_model->find_all();
		$data['service'] = $this->load->view('service/index','',true);
		Template::set('data', $data);	
		Template::render();
	}
	
	//--------------------------------------------------------------------
	

}