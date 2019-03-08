<?php

if (!function_exists('is_logged_in')) {

    function is_logged_in() {
        $CI = & get_instance();
        $is_logged_in = $CI->session->userdata(md5('erp_mpb_session'));
        if (!isset($is_logged_in) || $is_logged_in != true) :
            redirect('');
        endif;
    }

    function is_logged_checked() {
        $CI = & get_instance();
        $is_logged_in = $CI->session->userdata(md5('erp_mpb_session'));
        if (isset($is_logged_in) || $is_logged_in == true) :
            redirect($is_logged_in['direct']);
        endif;
    }

    function isnot_logged_in() {
        $CI = & get_instance();
        $is_logged_in = $CI->session->userdata(md5('erp_mpb_session'));
        if (isset($is_logged_in) || $is_logged_in == true) :
            redirect('');
        endif;
    }

    function is_logged_check() {
        $CI = & get_instance();
        $is_logged_in = $CI->session->userdata(md5('erp_mpb_session'));
        return $is_logged_in;
    }

    function is_filtered($level) {
        $CI = & get_instance();

        $jum = 0;

        $is_logged_in = $CI->session->userdata(md5('erp_mpb_session'));
        
        if ($is_logged_in['level'] == $level) :
            $jum ++;
        endif;

        if ($is_logged_in['level'] <> $level) :

            $new_session['id'] = $is_logged_in['id'];
            $new_session['logged_in'] = $is_logged_in['logged_in'];
            $new_session['level'] = $level;
            
            $CI->session->set_userdata(md5('erp_mpb_session'), $new_session);

            $jum ++;
        endif;


        if ($jum == 0) {
            redirect("", 'refresh');
        }
    }

}