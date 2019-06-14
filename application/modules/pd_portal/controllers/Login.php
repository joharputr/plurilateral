<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    private $title = "Login";
    private $url = "login";

    public function __construct() {
        parent::__construct();
        // is_logged_in();
    }

    public function index() {
                $this->load->view('login');
            }
        // } else {
        //     echo 'i';
        //     // show_404();
        // }
    }
