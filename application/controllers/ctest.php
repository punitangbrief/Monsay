<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctest extends CI_Controller {

	
	public function index()
	{
		$test['test1'] = "Hello World!";
		
		$this->load->helper('url');
		$this->load->view('vthesis/vtest',$test);
	}
}
?>