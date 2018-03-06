<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
	
		$data['titulo'] = "SCA - Login";
        $data['url'] = base_url();
 
        $this->load->view('login/login',$data);

	}
}
