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

    public function tambah_kegiatan()
    {
        $data['title'] = "Plurilateral Add Event";
        $data['private_url'] = "tambah_kegiatan";
        $data['show'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/event/tambah_kegiatan', $data);
    }

    public function edit_kegiatan()
    {
        $data['title'] = "Plurilateral Edit Event";
        $data['private_url'] = "edit_kegiatan";
        $data['show'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/event/edit_kegiatan', $data);
    }
}
