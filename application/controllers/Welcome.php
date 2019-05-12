<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
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
		if(!empty($pages)){
			if($pages == "data")
			{
				$this->load->view('content_national/data', $data);
			} else if($pages == "preview"){
				$this->load->view('content_national/preview', $data);
			}
		}else{
			$this->load->view('national_init', $data);
		}
	}
	public function paper()
	{
		$this->load->view('./paper');
	}
	public function journal()
	{
		$this->load->view('./journal');
	}
	public function workshop($pages = null)
	{
		$data['show'] = null; //execute query
		if(!empty($pages)){
			if($pages == "data")
			{
				$this->load->view('content_workshop/data', $data);
			} else if($pages == "preview"){
				$this->load->view('content_workshop/preview', $data);
			}
		}else{
			$this->load->view('workshop', $data);
		}
	}
	public function steeringCommittee()
	{
		$this->load->view('./steeringCom');
	}
	public function videos()
	{
		$this->load->view('./videos/header');
		$this->load->view('./videos/footer');
	}

	 public function sendEmail()
 {
	$this->load->helper(array('form', 'url'));
			$this->load->library('upload');
		//	$this->load->library('email');
			
$email_config = Array(
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

			if($this->email->send())
			{
				echo "berhasil mengirim email";
			}else
			{
				echo "gagal mengirim email";
			}

 
 	redirect('','refresh');
}

}