<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller {

	private $title = "International Event";
	private $url = "intern";

	function __construct() {
		parent::__construct();
	}

	function index($pages = null)	{
		if($pages != null){
			$this->load->view('content/'.$pages.'.php');
		}
		else {
			$this->load->view('index.php');
		}
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

