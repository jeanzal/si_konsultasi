<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeC extends CI_Controller {

	public function index()
	{
		$this->load->view('public/home');
	}
}
