<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
	}

	public function index()
	{
		$this->load->view('/landing_page/header');
	}
	public function international()
	{
		$this->load->view('event');
		$this->load->view('plurilateral_dialog');
	}
	public function national()
	{
		$this->load->view('./national_dialog/header');
		$this->load->view('./national_dialog/footer');
	}
	public function paper()
	{
		$this->load->view('./paper/header');
		$this->load->view('./paper/footer');
	}
	public function journal()
	{
		$this->load->view('./journal/header');
		$this->load->view('./journal/footer');
	}
	public function workshop()
	{
		$this->load->view('./workshop/header');
		$this->load->view('./workshop/footer');
	}
	public function steeringCommittee()
	{
		$this->load->view('./steeringCommittee/header');
		$this->load->view('./steeringCommittee/footer');
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
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => '465',
            'smtp_user' => 'joharputraadek@gmail.com',
            'smtp_pass' => 'adekjelek1',
            'mailtype'  => 'html',
            'starttls'  => true,
            'newline'   => "\r\n"
        );
 		
        $this->load->library('email', $email_config);

        $this->email->to('joharputraadek@gmail.com');
   		$this->email->from($this->input->post('email_id'),'email_id'); // change 
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
