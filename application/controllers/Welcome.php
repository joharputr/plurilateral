<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Plurilateral Dialogue";
		$this->load->view('landing_page');
	}

	public function international()
	{
		$this->load->view('event');
	}

	public function national($pages = null)
	{
		$data['show'] = 'ada'; //execute query
		if (!empty($pages)) {
			if ($pages == "data") {
				$this->load->view('content_national/data', $data);
			} else if ($pages == "preview") {
				$this->load->view('content_national/preview', $data);
			}
		} else {
			$this->load->view('national_init', $data);
		}
	}

	public function paper()
	{
		$data['tahun'] = $this->db->query("SELECT DISTINCT YEAR(tanggal_mulai) as year FROM kegiatan")->result();
		$data['private_url'] = 'paper';
		$this->load->view('paper/index', $data);
	}

	public function dataPaper(){
		$data['private_url'] = 'paper';
		$sql_where = "WHERE id IS NOT NULL";
		$sql_where .= (!empty($_GET['sort_type']) ? ($_GET['sort_type'] != "all" ? " and e.tipe='$_GET[sort_type]'" : null) : null);
		$sql_where .= (!empty($_GET['sort_year']) ? ($_GET['sort_year'] != "all" ? " and YEAR(e.tanggal_mulai)='$_GET[sort_year]'" : null) : null);
		$data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan e $sql_where" )->result();
		$data['dokumen'] = $this->db->query("SELECT * FROM dokumen d")->result();
		$this->load->view('paper/data', $data);
	}

	public function journal()
	{
		$this->load->view('./journal');
	}

	public function workshop($pages = null)
	{
		$data['show'] = null; //execute query
		if (!empty($pages)) {
			if ($pages == "data") {
				$this->load->view('content_workshop/data', $data);
			} else if ($pages == "preview") {
				$this->load->view('content_workshop/preview', $data);
			}
		} else {
			$this->load->view('workshop', $data);
		}
	}
	public function steeringCommittee()
	{
		$this->load->view('./steeringCom');
	}

	public function sendEmail()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload');
		//	$this->load->library('email');

		$email_config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://mail.plurilateral.org',
			'smtp_port' => '465',
			'smtp_user' => 'plurilateral@plurilateral.org',
			'smtp_pass' => 'plurilateral',
			'mailtype'  => 'html',
			'starttls'  => true,
			'newline'   => "\r\n"

			//A)g73Pv@yz79RW
			//A)g73Pv@yz79RW
			//A)g73Pv@yz79RW

		);

		$this->load->library('email', $email_config);
		$this->email->to('plurilateral@plurilateral.org');
		$this->email->from($this->input->post('email_id')); // change 
		$this->email->subject($this->input->post('subject'));
		$this->email->message($this->input->post('body'));

		if ($this->email->send()) {
			echo "berhasil mengirim email";
		} else {
			echo "gagal mengirim email";
		}

		redirect('', 'refresh');
	}
}
