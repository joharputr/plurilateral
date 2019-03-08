<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {

	private $title = "International Event";
    private $url = "intern";

	function __construct() {
        parent::__construct();
    }

	function index($pages = null)	{

			$this->load->view('index.php');
		}	

		function about(){
			$this->load->view('content/about.php');
		}	
		function goal(){
			$this->load->view('content/goal.php');
		}
		function readm(){
			$this->load->view('content/readm.php');
		}
	}

