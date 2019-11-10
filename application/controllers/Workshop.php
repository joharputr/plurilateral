<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Workshop extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Workshop";
        $data['private_url'] = 'workshop';
        $data['tahun'] = $this->db->query("SELECT DISTINCT YEAR(tanggal) as year FROM artikel")->result();
        $this->load->view('artikel/index', $data);
    }

    public function data()
    {
        $data['private_url'] = 'workshop';
        $sql_where = "WHERE d.tipe_artikel = 'workshop'";
        $sql_where .= (!empty($_GET['sort_year']) ? ($_GET['sort_year'] != "all" ? " and YEAR(d.tanggal)='$_GET[sort_year]'" : null) : null);
        $sql_where .= (!empty($_GET['sort_title']) ? ($_GET['sort_title'] != "all" ? " and d.judul LIKE '%$_GET[sort_title]%'" : null) : null);
        $data['show'] = $this->db->query("SELECT * FROM artikel d $sql_where")->result();
        $this->load->view('artikel/data', $data);
    }

    public function preview($id  = null)
    {
        $data['private_url'] = 'workshop';
        $data['preview'] = $this->db->query("SELECT * FROM artikel d WHERE d.artikel_id = '" . $id . "'")->result();
        $this->load->view('artikel/preview', $data);
    }
}
