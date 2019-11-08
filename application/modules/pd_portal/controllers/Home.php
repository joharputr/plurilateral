<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    private $title = "Home";
    private $url = "home";

    public function __construct() {
        parent::__construct();
        // is_logged_in();
    }

    public function index($page = NULL) {
        // $data['sess'] = $this->auth_x();
        // $data['comp_selected'] = $this->db->query("select * from apps_comp0 where comp_id = 1")->last_row();
        // if (!empty($data['comp_selected'])) {
        //     $data['title'] = $data['comp_selected']->comp_name;
            $data['private_url'] = "home";
            if (is_null($page)) {
                $this->load->view("index", $data);
            } else {
                redirect()->to("Document/index");
            }
        // } else {
        //     echo 'i';
        //     // show_404();
        // }
    }
}