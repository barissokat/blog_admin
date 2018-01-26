<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Front extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('/front/pages/homepage');
	}
	public function about()
	{
		$this->load->view('/front/pages/aboutpage');
	}
	public function scroll()
	{
		$this->load->view('/front/pages/scrollpage');
	}
	public function contact()
	{
		$this->load->view('/front/pages/contactpage');
	}
}
?>