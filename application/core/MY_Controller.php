<?php

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function auth_x($mod_active = null, $feat_active = null, $feat_content = null) {
        if ($this->session->userdata(md5('erp_mpb_session'))) {
            $data['apps'] = $this->db->get("apps")->last_row();
            $data['session'] = $this->session->userdata(md5('erp_mpb_session'));
            $data['emp'] = $this->db->query("select e.*,r.religion_name from mg_users0 e left join md_religion r on r.religion_id = e.religion_id where md5(e.users_id) = '" . $data['session']['id'] . "'")->last_row();

            $data['addr'] = $this->db->query("select * from mg_users4_addrs lua "
                            . "left join md_loc3_area a ON a.area_id = lua.area_id "
                            . "left join md_loc2_district d ON d.district_id = a.district_id "
                            . "left join md_loc1_province p ON p.prov_id = d.prov_id "
                            . "where lua.users_id = '" . $data['emp']->users_id . "' and lua.addrs_type = 1")->last_row();
            $data['emergency'] = $this->db->query("select uf.*, r.rel_name from mg_users3_famly uf "
                            . "left join md_relation r ON r.rel_id = uf.rel_id "
                            . "WHERE uf.users_id = '" . $data['emp']->users_id . "' and uf.ufam_mode = 'E' ")->last_row();
            if (!empty($mod_active)) {
                $data['mod_current'] = $this->db->query("select * from apps_maps0_mod where modul_url = '$mod_active'")->last_row();
            }
            if (!empty($feat_active)) {
                $data['ft_acv'] = $this->feat_current(!empty($feat_content)?"$feat_active/$feat_content":$feat_active);
            }
            $data['sess_comp'] = $this->session->userdata("access");
            $data['comp_current'] = $this->db->query("select * from apps_comp0 where comp_id =1")->last_row();
            return $data;
        } else {
            redirect("");
        }
    }

    public function sts_trans($data, $exe = null) {
        $sts_cvt = false;
        if (!empty($data)) {
            if (!empty($exe)) {
                if ($exe == 'del') {
                    $this->crud_model->delete_data('log_status', "sts_table = '$data[table]' and sts_table_id = '$data[id]'");
                    $sts_cvt = true;
                }
            } else {
                $exist = $this->db->query("select * from log_status where sts_table = '$data[table]' "
                                . "and sts_table_id = '$data[id]'")->last_row();
                if (!empty($exist)) {
                    if ($exist->sts_author != $data['author'] || $exist->sts_action != $data['status'] || $exist->sts_type != $data['sts_typ']) {
                        $this->crud_model->insert_data("log_status", array('sts_table' => $data['table'],
                            "sts_table_id" => $data['id'], "sts_author" => $data['author'], "sts_type" => !empty($data['sts_typ']) ? $data['sts_typ'] : 'New', "sts_note" => !empty($data['note']) ? $data['note'] : null,
                            "sts_action" => $data['status']));
                        $sts_cvt = true;
                    }
                } else {
                    $this->crud_model->insert_data("log_status", array('sts_table' => $data['table'],
                        "sts_table_id" => $data['id'], "sts_author" => $data['author'], "sts_type" => !empty($data['sts_typ']) ? $data['sts_typ'] : 'New', "sts_note" => !empty($data['note']) ? $data['note'] : null,
                        "sts_action" => $data['status']));
                    $sts_cvt = true;
                }
            }
        }
        return $sts_cvt;
    }

    public function feat_current($x = null) {
        if (!empty($x)) {
            return $this->db->query("select * from apps_mod2_feat f "
                            . "join apps_mod1_type t on t.type_id = f.type_id "
                            . "where f.feat_url = '$x'")->last_row();
        } else {
            return false;
        }
    }

    public function mod_feat($get_modul = null) {
        $data = array();
        $data['group'] = array("group", "single");
        if (!empty($get_modul)) {
            $data['feat_type'] = $this->db->query("select * from apps_mod1_type a where (select count(fs.feat_id) from apps_mod2_feat fs join apps_maps1_rel r on r.feat_id = fs.feat_id where fs.type_id = a.type_id and r.modul_id = $get_modul) > 0 order by a.type_post ASC")->result();
            foreach ($data['feat_type'] as $x => $ft_cvt) {
                foreach ($data['group'] as $c => $row) {
                    if ($row == "group") {
                        $data['feat_group'][$c][$x] = $this->db->query("select a.gr_id, LOWER(a.gr_name) as ft_group,ic.icon_name as gr_icon from apps_mod0_gr a left join apps_icon ic on ic.icon_id = a.icon_id "
                                        . "join apps_mod2_feat f on f.gr_id = a.gr_id join apps_maps1_rel r on r.feat_id = f.feat_id join apps_maps0_mod am on am.modul_id = r.modul_id "
                                        . "where a.gr_status != 3 and f.feat_status != 3 and f.type_id = $ft_cvt->type_id and am.modul_id = $get_modul and f.gr_id is not null group by a.gr_id "
                                        . "order by a.gr_post ASC")->result();
                        foreach ($data['feat_group'][$c][$x] as $g => $fg_cvt) {
                            $data['feat'][$c][$x][$g] = $this->db->query("select *, ic.icon_name as feat_icon from apps_mod2_feat a left join apps_icon ic on ic.icon_id = a.icon_id "
                                            . "join apps_maps1_rel r on r.feat_id = a.feat_id "
                                            . "join apps_maps0_mod am on am.modul_id = r.modul_id "
                                            . "where a.feat_status != 3 and a.type_id = $ft_cvt->type_id and am.modul_id = $get_modul and a.gr_id = '$fg_cvt->gr_id' "
                                            . "order by a.feat_post ASC")->result();
                        }
                    } else {
                        $data['feat'][$c][$x] = $this->db->query("select *, ic.icon_name as feat_icon from apps_mod2_feat a left join apps_icon ic on ic.icon_id = a.icon_id "
                                        . "join apps_maps1_rel r on r.feat_id = a.feat_id "
                                        . "join apps_maps0_mod am on am.modul_id = r.modul_id "
                                        . "where a.feat_status != 3 and a.type_id = $ft_cvt->type_id and am.modul_id = $get_modul and a.gr_id is null "
                                        . "order by a.feat_post ASC")->result();
                    }
                }
            }
        }
        return $data;
    }

    public function header_requesting($header) {
        $header = strtolower($header);
        $method = $this->input->method();

        if ($method != $header) {
            show_404();
        }
    }

    public function create_new_password($id) {

        if (!empty($id)) {
            $this->db->where("users_id", $id);
            $this->db->select("TIME_TO_SEC(TIMEDIFF(users_new_password_expired, now())) as time, users_mail, users_fullname");
            $time = $this->db->get("mg_users0")->row_array();

            if ($time > 0) {
                $email = $time['users_mail'];
                $from_email = 'noreplay@jakarta-apartment.com'; // ganti dengan email kalian

                $link = "http://mpb.folarbiz.co.id/new-password?new_valid_time=" . base64_encode($email);

                $mail_message = 'Dear ' . ucwords($time['users_fullname']) . ',' . "\r\n";
                $mail_message .= 'Please follow this link for create new password,<br> Your <b>link new password</b> is <b>' . $link . '</b>' . "\r\n";

                $mail_message .= '<br>Thanks & Regards';
                $mail_message .= '<br>ERP ' . $this->config->item('config_company');
                $config['smtp_host'] = 'mpb-resplan.co.id'; // sesuaikan dengan host email
                $config['smtp_timeout'] = '7';
                $config['smtp_port'] = '465'; // sesuaikan
                $config['smtp_user'] = 'mail@mpb-resplan.co.id';
                $config['smtp_pass'] = 'm41l4p412t7kt'; // ganti dengan password email
                $config['mailtype'] = 'html';
                $config['charset'] = 'iso-8859-1';
                $config['wordwrap'] = TRUE;
                $config['newline'] = "\r\n";
                $config['crlf'] = "\r\n";
                $this->email->initialize($config);

                $this->email->from($from_email, 'ERP - Create New Password');
                $this->email->to($email);
                $this->email->subject("Create New Password");
                $this->email->message($mail_message);
                if (!@$this->email->send()) {
                    echo json_encode(array('status' => 0, 'msg' => 'Failed to send password, please try again!'));
                } else {
                    $this->change_expired($email);
                    echo json_encode(array('status' => 1, 'msg' => 'Password sent to your email! Please cek your email'));
                }
            }
        }
    }

    public function record_activity($rec = null) {
        if ($this->session->userdata(md5('erp_mpb_session'))) {
            if (!empty($rec)) {
                $sess = $this->session->userdata(md5('erp_mpb_session'));
                $users_current = $this->db->query("select e.users_id as id from mg_users0 e where md5(e.users_id) = '" . $sess['id'] . "'")->last_row();
                $data['activity_id'] = "";
                $data['users_id'] = $users_current->id;
                if (!empty($this->uri->segment(1))) {
                    $mod_current = $this->db->query("select * from apps_maps0_mod where modul_url = '" . $this->uri->segment(1) . "'")->last_row();
                    if (!empty($mod_current)) {
                        $data['modul_id'] = $mod_current->modul_id;
                    } else {
                        $data['modul_id'] = (!empty($rec['mod']) ? $rec['mod'] : null);
                    }
                } else {
                    $data['modul_id'] = (!empty($rec['mod']) ? $rec['mod'] : null);
                }
                if (!empty($this->uri->segment(2))) {
                    $feat_current = $this->db->query("select * from apps_mod2_feat where feat_url = '" . $this->uri->segment(2) . "'")->last_row();
                    if (!empty($feat_current)) {
                        $data['activity_ref'] = $feat_current->feat_id;
                    } else {
                        $data['activity_ref'] = (!empty($rec['ref']) ? $rec['ref'] : null);
                    }
                } else {
                    $data['activity_ref'] = (!empty($rec['ref']) ? $rec['ref'] : null);
                }
                $data['activity_date'] = date("Y-m-d H:i:s");
                $data['activity_desc'] = (!empty($rec['note']) ? $rec['note'] : null);
                $this->crud_model->insert_data("log_activity", $data);
            }
        }
    }

}
