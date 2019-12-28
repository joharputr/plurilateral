<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    private $title = "Login";
    private $url = "login";

    public function __construct() {
        parent::__construct();
      /*  if ($this->session->userdata()) {
            redirect(base_url("portal"));
        }*/
    }

    public function index() {
        $data["login"] = $this->db->query("SELECT * FROM user");
        $this->load->view('login',$data);
    }


    function do_login(){
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $where = array(
            'nama' => $nama,
            'password' => $password,
        );
      //  $cek = $this->model_admin->cek_login("login",$where)->num_rows();
        $cek = $this->db->get_where("user",$where)->num_rows();
        
        if($cek > 0){
            $data_session = array(
                'nama' => $nama,
                'status' => "login",
            );

            $this->session->set_userdata($data_session);

            redirect('portal','refresh');

        }else{
            $this->session->set_flashdata("k", "<div id=\"alert\" class=\"alert alert-error\">username or password is not valid</div>");
            
            redirect('portal/login');
        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
       redirect('portal/login');
    }
}
