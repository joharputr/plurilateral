<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Journal extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        //        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Journal";
        $data['tahun'] = $this->db->query("SELECT DISTINCT YEAR(tanggal_mulai) as year FROM kegiatan")->result();
        $data['private_url'] = 'journal';
        $this->load->view('dokumen/index', $data);
    }

    public function data()
    { 
        $data['private_url'] = 'jurnal';
		$sql_where = "WHERE d.tipe_dokumen = 'jurnal'";
		$sql_where .= (!empty($_GET['sort_type']) ? ($_GET['sort_type'] != "all" ? " and e.tipe='$_GET[sort_type]'" : null) : null);
		$sql_where .= (!empty($_GET['sort_year']) ? ($_GET['sort_year'] != "all" ? " and YEAR(e.tanggal_mulai)='$_GET[sort_year]'" : null) : null);
		$sql_where .= (!empty($_GET['sort_title']) ? ($_GET['sort_title'] != "all" ? " and e.nama LIKE '%$_GET[sort_title]%'" : null) : null);
		$data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan e LEFT JOIN dokumen d ON d.event = e.kegiatan_id $sql_where GROUP BY e.kegiatan_id" )->result();
		$data['dokumen'] = $this->db->query("SELECT * FROM dokumen d WHERE d.tipe_dokumen = 'jurnal'")->result();
		$this->load->view('dokumen/data', $data);
    }
}
