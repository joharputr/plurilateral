<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
	}

	public function index()
	{
		$this->load->view('/landing_page/header');
		$this->load->view('/landing_page/landing_page');
		$this->load->view('/landing_page/footer');
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
      
   //  $attched_file= $_SERVER["DOCUMENT_ROOT"]."/upload/".$file_name;
     // $this->email->attach($attched_file);
     /*   $file_name = $this->upload_file();
        $this->email->attach($file_name);
     
        $this->email->send();*/
        /*	$this->upload->initialize(array(
            "upload_path"   => "./upload",
			"allowed_types" => "*"
			));
			*/
			//Perform upload.
		/*	if($this->upload->do_multi_upload("lampiran"))
				{
				
				$lamp = $this->upload->get_multi_upload_data();
				foreach ($lamp as $key=>$value)
				{
					$this->email->attach($value['full_path']);
				}
			}else
			{
				echo $this->upload->display_errors();	
			}
			*/
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
