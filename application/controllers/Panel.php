<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panel extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		if ($this->session->admin) {
			$this->load->view('/panel/pages/homepage');
		} else {
			redirect('/login');
		}
	}	
}
?>