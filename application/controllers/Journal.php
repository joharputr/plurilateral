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
        $this->load->view('resource/index', $data);
    }

    public function data()
    {
        $data['private_url'] = 'journal';
        $koma = get_browser_name($_SERVER['HTTP_USER_AGENT']) == 'Chrome' ? '' : ';';
        $sql_where = "WHERE is_event = 0";
        $sql_where .= (!empty($_GET['sort_year']) ? ($_GET['sort_year'] != "all" ? " and YEAR(d.tanggal)='$_GET[sort_year]'" : null) : null);
        $sql_where .= (!empty($_GET['sort_title']) ? ($_GET['sort_title'] != "all" ? " and d.judul LIKE '%$_GET[sort_title]%'" : null) : null);
        $jml = $this->db->query("select * from pl_resource d $sql_where");
        $per = 2;
        $paging = 3;
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = $per; /* Jumlah data yang dipanggil perhalaman */
        $config['uri_segment'] = $paging; /* data selanjutnya di parse diurisegmen 4 */
        $config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; margin: 0px;'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li class="paging-load">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li  class='active'><a>";
        $config['cur_tag_close'] = "</a></li>";
        $config['next_tag_open'] = "<li >";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li >";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $config['base_url'] = "javascript:void(0)$koma";
        $config['_attributes'] = "onclick='paging(this)'";
        $this->pagination->initialize($config);
        $data['halaman'] = $this->pagination->create_links();
        if ($this->uri->segment($paging) != null) {
            $offset = $this->uri->segment($paging);
        } else {
            $offset = 0;
        }
        $data['nom_started'] = $offset + 1;
        $data['show'] = $this->db->query("SELECT * FROM pl_resource d $sql_where LIMIT $offset,$per")->result();
        $this->load->view('resource/data', $data);
    }
}
