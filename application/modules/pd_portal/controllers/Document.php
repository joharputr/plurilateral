<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends MY_Controller {

    private $title = "Document";
    private $url = "document";

    public function __construct() {
        parent::__construct();
        // is_logged_in();
    }

    public function index() {
            $data['private_url'] = "document";
                $this->load->view('content/document', $data);
    }
}