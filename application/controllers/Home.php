<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    private $title = "Home";
    private $url = "home";

    public function __construct() {
        parent::__construct();
//        is_logged_in();
    }

    public function index() {
//        $data['sess'] = $this->auth_x();
//        $data['comp_selected'] = $this->db->query("select * from apps_comp0 where comp_id = 1")->last_row();
//        if (!empty($data['comp_selected'])) {
            $data['title'] = "Plurilateral Dialogue";
//            $data['private_url'] = "home";
//            if (!empty($_GET['data'])) {
//                if ($_GET['data'] == 'modul') {
//                    $data['mod'] = $this->db->query("select * from apps_maps0_mod m "
//                                    . "left join apps_icon ic on ic.icon_id = m.icon_id "
//                                    . "where m.mod_host is null order by m.modul_post ASC")->result();
//                } elseif ($_GET['data'] == 'activities') {
//                    $data["show"] = $this->db->query("select * from log_activity a join mg_users0 e on e.users_id = a.users_id "
//                                    . "left join apps_maps0_mod m on m.modul_id = a.modul_id "
//                                    . "left join apps_mod2_feat f on f.feat_id = a.activity_ref "
//                                    . "order by a.activity_id DESC")->result();
//                }
//                $this->load->view("home/$_GET[data]", $data);
//            } else {
//                $data['sess_comp'] = $this->session->userdata("access");
//                $data['modal'] = true;
                $this->load->view('home/index', $data);
//            }
//        } else {
//            show_404();
//        }
    }
}
    