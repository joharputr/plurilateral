<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends MY_Controller
{

    private $title = "Document";
    private $url = "document";

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Plurilateral Event";
        $data['private_url'] = "event";
        $data['show'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/event/kegiatan', $data);
    }

    //buat fungsi nampilin bisa liat di controller lain
}
