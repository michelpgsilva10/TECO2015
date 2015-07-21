<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area_user extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function logar()
	{
		echo "Não fiz ainda :D";
	}
}
?>