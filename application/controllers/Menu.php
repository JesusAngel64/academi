<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {

	function __construct()
	{
	    parent::__construct();
	}
	public function index()
	{
		$this->load->view('vistaMenu/elclub');
	}
  
}
 ?>
