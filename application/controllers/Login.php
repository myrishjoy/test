<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		if ( isset( $_SESSION['logged_in'] ) )
		{
			redirect('SADU/Dashboard', 'refresh');
	    }     
	}

	function index()
	{
		//something neww here
		//NEW COMMENT HERE
		$this->load->helper(array('form'));
		$this->load->view('login_page');
	}
}
?>
