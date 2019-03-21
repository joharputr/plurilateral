<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {

	private $title = "International Event";
	private $url = "intern";

	function __construct() {
		parent::__construct();
	}

	function index($pages = null)	{
		if($pages != null){
			$this->load->view('content/'.$pages.'.php');
		}
		else {
			$this->load->view('index.php');
		}
	}	
}

