<?php

function codeCvt($value) {

    $jml = strlen($value);
    if ($jml == 1)
        $no = "00" . $value;
    if ($jml == 2)
        $no = "0" . $value;
    if ($jml == 3)
        $no = $value;
    if ($jml == 0)
        $no = "0000001";

    return $no;
}

function setInterval($f, $milliseconds) {
    $seconds = (int) $milliseconds / 1000;
    while (true) {
        $f();
        sleep($seconds);
    }
}

function nik($register, $born, $code) {
    $codeCvt = "-";
    if (!in_array("", array($register, $born, $code))) {
        $codeCvt = date("my", strtotime($register)) . "." . date("m", strtotime($born)) . "-" . codeCvt($code);
    }

    return $codeCvt;
}

function main_cvt($data) {
    if (!empty($data)) {
        $x = array();
        $CI = & get_instance();
        if (!empty($data['ofc'])) {
            $x = $CI->db->query("select ofc_id as id, CONCAT('Kantor ',ofc_cat,' ( ',ofc_code ,' )') as cvt from apps_comp2_office where ofc_id = $data[ofc]")->last_row();
        } elseif (!empty($data['prj'])) {
            $x = $CI->db->query("select prj_id as id, CONCAT('Proyek ',prj_name,' ( ',prj_code ,' )') as cvt from mg_project0 where prj_id = $data[prj]")->last_row();
        } elseif (!empty($data['comp'])) {
            $x = $CI->db->query("select comp_id as id, comp_name as cvt from apps_comp0 where comp_id = $data[comp]")->last_row();
        }
        return $x;
    } else {
        show_404();
    }
}

function get_name_file($files, $def = null) {
    $exploded = explode(",", str_replace(array("./", "/"), ",", $files));

    $result = null;
    foreach ($exploded as $num => $elem) {
        $result = array($num => $elem);
    }

    return empty($files) ? $def : array_pop($result);
}

function date_conv($date) {
    $date_ = null;
    if (!empty($date)) {
        $convert = explode("/", $date);
        $convert_ = $convert[1] . "/" . $convert[0] . "/" . $convert[2];
        $date_ = date("Y-m-d", strtotime($convert_));
    }
    return $date_;
}

function COA($x_val = null) {
    $x = str_split($x_val);
    return implode(".", $x);
}

function stsMain($x = null, $y = null) {
    if ($x == 'Submission') {
        if ($y == "New") {
            return '<i class="fas fa-clock m-r-10"></i>Pengajuan Baru';
        } else {
            return '<i class="fas fa-clock m-r-10"></i>Revisi Pengajuan';
        }
    } elseif ($x == 'Delivery') {
        if ($y == "New") {
            return '<i class="fas fa-clock m-r-10"></i>Proses Pengiriman';
        } else {
            return '<i class="fas fa-clock m-r-10"></i>Pengiriman Ulang';
        }
    } elseif ($x == 'Received') {
        return '<i class="fas fa-thumbs-up m-r-10"></i>Distribusi Diterima';
    } elseif ($x == 'Approval') {
        return '<i class="fas fa-thumbs-up m-r-10"></i>Telah Disetujui & Menunggu Realisasi';
    } elseif ($x == 'Roleback') {
        return '<i class="fas fa-undo m-r-10"></i>Pengajuan Dibatalkan';
    } elseif ($x == "Reject") {
        return '<i class="fas fa-thumbs-down m-r-10"></i>Pengajuan Ditolak';
    } elseif ($x == "Finish") {
        return '<i class="fas fa-check m-r-10"></i>Selesai';
    } elseif ($x == "Cancel") {
        if ($y == "Revision") {
            return '<i class="fas fa-clock m-r-10"></i>Pembatalan';
        }
    }
}

function stShort($x = null, $z = null, $act = null) {
    if ($x == 1) {
        return '<i class="fas fa-clock ' . ($z == "dt" ? "m-r-10" : null) . '"></i>' . ($z == "dt" ? "<small>Menunggu Persetujuan</small>" : null);
    } elseif ($x == 2) {
        if (in_array($act, array('S', 'A'))) {
            return '<i class="fas fa-thumbs-up ' . ($z == "dt" ? "m-r-10" : null) . '"></i>' . ($z == "dt" ? "<small>Disetujui & Menunggu Realisasi</small>" : null);
        } else if ($act == "R") {
            return '<i class="fas fa-clock ' . ($z == "dt" ? "m-r-10" : null) . '"></i>' . ($z == "dt" ? "<small>Menunggu Realisasi</small>" : null);
        }
    } elseif ($x == 3) {
        return '<i class="fas fa-check ' . ($z == "dt" ? "m-r-10" : null) . '"></i>' . ($z == "dt" ? "<small>Selesai</small>" : null);
    } elseif ($x == 4) {
        return '<i class="fas fa-thumbs-down ' . ($z == "dt" ? "m-r-10" : null) . '"></i>' . ($z == "dt" ? "<small>Ditolak</small>" : null);
    }
}

function stsDistribution($x = null, $z = null) {
    if ($x == 1) {
        return '<i class="fas fa-clock ' . ($z == "dt" ? "m-r-10" : null) . '"></i>' . ($z == "dt" ? "<small>Proses Pengiriman</small>" : null);
    } elseif ($x == 2) {
        return '<i class="fas fa-check ' . ($z == "dt" ? "m-r-10" : null) . '"></i>' . ($z == "dt" ? "<small>Distribusi Diterima</small>" : null);
    } elseif ($x == 3) {
        return '<i class="fas fa-times ' . ($z == "dt" ? "m-r-10" : null) . '"></i>' . ($z == "dt" ? "<small>Pengiriman Dibatalkan</small>" : null);
    }
}

function statusExpot($x = null, $act = null) {
    if ($x == 1) {
        return "Menunggu Persetujuan";
    } elseif ($x == 2) {
        if (in_array($act, array('S', 'A'))) {
            return "Disetujui & Menunggu Realisasi";
        } else if ($act == "R") {
            return "Menunggu Realisasi";
        }
    } elseif ($x == 3) {
        return "Selesai";
    } elseif ($x == 4) {
        return "Ditolak";
    }
}

function personilStatus($x = null) {
    if ($x == 1) {
        return "<label class='label label-sm bg-primary'>Menunggu Konfirmasi</label>";
    } elseif ($x == 2) {
        return "<label class='label label-sm bg-success'>Aktif</label>";
    } elseif ($x == 3) {
        return "<label class='label label-sm bg-warning'>Suspend</label>";
    } elseif ($x == 4) {
        return "<label class='label label-sm bg-danger'>Archive</label>";
    }
}

function journalMode($x = null) {
    if ($x == "Operational") {
        return "Operasional";
    } elseif ($x == "Financial") {
        return "Pendanaan";
    } elseif ($x == "Investment") {
        return "Investasi";
    }
}

function isWeekend($date) {
    $weekDay = date('w', strtotime($date));
    return ($weekDay == 0 || $weekDay == 6);
}

function check_char($param, $char = null) {
    return (!empty($param) ? ($param == $char ? null : trim(ucwords(str_replace(array("'", "''", "&nbsp;", "\\", ',', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+', "?:"), "", $param)))) : null);
}

function gender($x = null) {
    if (!empty($x)) {
        if ($x == "P") {
            return "Perempuan";
        }if ($x == "L") {
            return "Laki-laki";
        } else {
            return "Tidak Terdaftar";
        }
    }
}

function cvtRangeDate($x, $typ = null) {
    $split = explode("_", $x);
    if (!empty($typ)) {
        if ($typ == "sql") {
            return "'" . date("Y-m-d", strtotime(manualSplitDate(str_replace("-", "/", $split[0])))) . "' and '" . date("Y-m-d", strtotime(manualSplitDate(str_replace("-", "/", $split[1])))) . "'";
        }
    } else {
        
    }
}

function convert_to_date($date) {
    $new_date = explode("/", $date);
    return $new_date[2] . '-' . $new_date[1] . '-' . $new_date[0];
}

function date_to_convert($date) {
    $new_date = explode("-", $date);
    return $new_date[2] . '/' . $new_date[1] . '/' . $new_date[0];
}

function phone_cvt($el) {
    $spl = substr($el, 0, 4);
    $spl_last = substr($el, 5);
    return "($spl) $spl_last";
}

function get_browser_name($user_agent) {
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/'))
        return 'Opera';
    elseif (strpos($user_agent, 'Edge'))
        return 'Edge';
    elseif (strpos($user_agent, 'Chrome'))
        return 'Chrome';
    elseif (strpos($user_agent, 'Safari'))
        return 'Safari';
    elseif (strpos($user_agent, 'Firefox'))
        return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7'))
        return 'Internet Explorer';
    return 'Other';
}

function base64_encode_image($url) {
    $urlParts = pathinfo($url);
    $extension = $urlParts['extension'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $base64 = 'data:image/' . $extension . ';base64,' . base64_encode($response);
    return $base64;
}

function decode_data($el = null, $selected = null) {
    if (!empty($el)) {
        foreach (json_decode($el) as $desc => $result) {
            $cvt[$desc] = $result;
        }
    }
    if (!empty($selected)) {
        return (!empty($cvt[$selected]) ? $cvt[$selected] : null);
    } else {
        return (!empty($cvt) ? $cvt : null);
    }
}

function folders_full($folder) {
    $jumlah_array = 0;
    if (($buka_folder = @opendir($folder))) {

        $file_array = array();
        while ($baca_folder = @readdir($buka_folder)) {
            $file_array[] = $baca_folder;
        }

        $jumlah_array = count($file_array);

        @closedir($buka_folder);
    }
    return $jumlah_array == 0 ? 2 : $jumlah_array;
}

function insert_load() {
    $CI = & get_instance();

    $CI->db->where_not_in('time', date('Y-m-d H:i:s'));
    $CI->db->truncate('log_exe');

    return $CI->db->insert('log_exe', array('c_url' => current_url()));
}

function convert_nominal($param) {
    return str_replace(",", ".", str_replace(".", "", $param));
}

function encode_data($el = null) {
    $data_check = 0;
    if (!empty($el)) {
        foreach ($el as $desc => $result) {
            if (!empty($result)) {
                if (count($result) > 1) {
                    foreach ($result as $re_nom => $re_row) {
                        if (!empty($re_row)) {
                            $cvt[$desc][$re_nom] = $re_row;
                            $data_check += 1;
                        }
                    }
                } else {
                    $cvt[$desc] = $result;
                    $data_check += 1;
                }
            }
        }
    }
    return ($data_check > 0 ? json_encode($cvt) : NULL);
}

function upload_by_encode($param, $path = null, $upload_action = null) {
    $path = (!empty($path) ? $path : 'assets/img');
    $img = str_replace('data:image/png;base64,', '', $param);
    $img = str_replace('data:image/jpeg;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data_upload = base64_decode($img);
    $img_upload = $path . "/ams-" . uniqid() . ".jpg";
    if (empty($upload_action)) {
        file_put_contents($img_upload, $data_upload);
    }
    return $img_upload;
}

function greetings() {
    $now = date("H:i");
    if ($now >= '00:01' && $now <= '04:00') {
        return "Selamat Menanti Pagi !";
    } else if ($now > '04:00' && $now <= '10:00') {
        return "Selamat Pagi !";
    } else if ($now > '10:00' && $now <= '15:00') {
        return "Selamat Siang !";
    } else if ($now > '15:00' && $now <= '18:00') {
        return "Selamat Sore !";
    } else if ($now > '18:00' && $now <= "24:00") {
        return "Selamat Malam !";
    } else {
        return "Selamat beristirahat !";
    }
}

function shortext($value, $length, $non = null) {
    $isi_berita = htmlentities(strip_tags($value));
    $isi1 = substr($isi_berita, 0, $length);
    $isi = substr($isi_berita, 0, strrpos($isi1, " "));
    if ($isi1 != $isi_berita) {
        $show = ucfirst($isi) . "...";
    } else {
        $show = $isi1;
    }
    return $show;
}

function terbilangs($currency) {
    $angka = array(false, 'Satu ', 'Dua ', 'Tiga ', 'Empat ', 'Lima ', 'Enam ', 'Tujuh ', 'Delapan ', 'Sembilan ');
    $group = array(2 => 'Ribu ', 3 => 'Juta ', 4 => 'Miliar ', 5 => 'Triliyun ', 6 => 'Kuadriliun ');
    $satuan = array(2 => 'Puluh ', 3 => 'Ratus ');

    $n = strlen($currency);
    $g = ceil($n / 3);
    $currency = str_pad($currency, $g * 3, '0', STR_PAD_LEFT);

    for ($x = 0; $x < $g; $x++) {
        $t = $g - $x;
        $c = ltrim(substr($currency, $x * 3, 3), '0');
        $sub = false;

        $n = strlen($c);
        for ($i = 0; $i < $n; $i++) {
            $rpos = $n - $i;
            $gpos = (!$gpos = ($rpos % 3)) ? 3 : $gpos;

            $a = $c[$i];
            $s = false;
            if ($gpos == 1) {
                $a = ($c[$i - 1] == 1 || !$a) ? false : $a;
                $a = ($a == 1 && ($t == 2 && $c == 1)) ? 'se' : $angka[$a];
            } elseif ($gpos == 2 && $a == 1) {
                $a = ($c[$i + 1] > 1) ? $angka[$c[$i + 1]] : 'se';
                $s = ($c[$i + 1] > 0) ? 'belas ' : $satuan[$gpos];
            } elseif ($gpos == 2 && $a != 1) {
                $s = ($a) ? $satuan[$gpos] : false;
                $a = $angka[$a];
            } else {
                $s = ($a) ? $satuan[$gpos] : false;
                $a = ($a == 1) ? 'se' : $angka[$a];
            }

            $sub .= $a . $s;
        }

        $str .= $sub . (($c) ? $group[$t] : false);
    }

    return ucwords(strtolower($str)) . ' Rupiah';
}

function currency($jml) {
    $dcm_cvt = explode('.', $jml);
    $dcm_param = (count($dcm_cvt) == 2) ? (strlen($dcm_cvt[1]) > 2) ? 2 : strlen($dcm_cvt[1]) : 0;
    $int = empty($jml) ? 0 : number_format($jml, $dcm_param, ',', '.');
    return $int;
}

function currencyXls($jml) {
    $dcm_cvt = explode(',', $jml);
    $dcm_param = (count($dcm_cvt) == 2) ? (strlen($dcm_cvt[1]) > 2) ? 2 : strlen($dcm_cvt[1]) : 0;
    $int = empty($jml) ? 0 : number_format($jml, $dcm_param, '.', ',');
    return $int;
}

function currency_short($jml) {
    $text = array('', '', 'K', 'Jt', 'M', 'T');
    $input = explode('.', rupiah($jml));
    $dcmc_param = (count($input) > 2) ? 0 : 0;
    $ints = empty($jml) ? 0 : number_format($input[0], $dcmc_param, ",", ".");
    $convert = $ints . '<small>' . $text[count($input)] . '</small>';
    return $convert;
}

function timeToReal($time, $format = null) {

    $y = date(empty($format) ? "H:i" : "H:i:s", strtotime($time));
    return $y;
}

function date2mysql($dates, $time = null) {
    $date = explode('-', $dates);
    $show_time = isset($time) ? "00:00:00" : null;
    return "$date[2]-$date[1]-$date[0] $show_time";
}

function datexls2mysql($dates) {
    $cvt = NULL;
    if (!empty($dates)) {
        $split_cvt = explode(".", $dates);
        $re_create = "$split_cvt[2]-$split_cvt[1]-$split_cvt[0]";
        $cvt = date("Y-m-d", strtotime($re_create));
    }
    return $cvt;
}

function manualSplitDate($date, $opr = null, $is_time = null) {
    $timeCvt = null;
    $dateCvt = $date;
    if (!empty($is_time)) {
        $timeSplit = explode(" ", $date);
        $dateCvt = $timeSplit[0];
        $timeCvt = $timeSplit[1];
    }
    $dateSplit = explode(!empty($opr) ? $opr : "/", $dateCvt);
    return "$dateSplit[2]-$dateSplit[1]-$dateSplit[0] $timeCvt";
}

function indo_date($date, $length = null, $show_hour = null, $format = null) {
    $datetime = explode(' ', $date);

    if (empty($datetime[1])) {
        $get_hour = null;
    } else {
        if (isset($show_hour)) {
            $hour = explode(":", $datetime[1]);
            $milis = !empty($format) ? ":$hour[2]" : null;
            $get_hour = "<i class='fas fa-clock m-r-5 m-l-5'></i> $hour[0]:$hour[1]$milis";
        } else {
            $get_hour = null;
        }
    }
    $tgl = explode("-", $datetime[0]);
    if ($tgl[1] == '01')
        $mo = empty($length) ? "Januari" : "Jan";
    if ($tgl[1] == '02')
        $mo = empty($length) ? "Februari" : "Feb";
    if ($tgl[1] == '03')
        $mo = empty($length) ? "Maret" : "Mar";
    if ($tgl[1] == '04')
        $mo = empty($length) ? "April" : "Apr";
    if ($tgl[1] == '05')
        $mo = "Mei";
    if ($tgl[1] == '06')
        $mo = "Juni";
    if ($tgl[1] == '07')
        $mo = "Juli";
    if ($tgl[1] == '08')
        $mo = empty($length) ? "Agustus" : "Agust";
    if ($tgl[1] == '09')
        $mo = empty($length) ? "September" : "Sept";
    if ($tgl[1] == '10')
        $mo = empty($length) ? "Oktober" : "Okt";
    if ($tgl[1] == '11')
        $mo = empty($length) ? "November" : "Nov";
    if ($tgl[1] == '12')
        $mo = empty($length) ? "Desember" : "Des";
    $tglutuh = "$tgl[2] $mo $tgl[0]";
    $convert = !empty($length) ? "$tglutuh $get_hour" : $get_hour;

    return $convert;
}

function getmonth($tgl, $length = null) {
    if ($tgl == '1')
        $mo = empty($length) ? "Januari" : "Jan";
    if ($tgl == '2')
        $mo = empty($length) ? "Februari" : "Feb";
    if ($tgl == '3')
        $mo = empty($length) ? "Maret" : "Mar";
    if ($tgl == '4')
        $mo = empty($length) ? "April" : "Apr";
    if ($tgl == '5')
        $mo = "Mei";
    if ($tgl == '6')
        $mo = empty($length) ? "Juni" : "Jun";
    if ($tgl == '7')
        $mo = empty($length) ? "Juli" : "Jul";
    if ($tgl == '8')
        $mo = empty($length) ? "Agustus" : "Agust";
    if ($tgl == '9')
        $mo = empty($length) ? "September" : "Sept";
    if ($tgl == '10')
        $mo = empty($length) ? "Oktober" : "Okt";
    if ($tgl == '11')
        $mo = empty($length) ? "November" : "Nov";
    if ($tgl == '12')
        $mo = empty($length) ? "Desember" : "Des";
    return $mo;
}

function daySet($nom) {
    if ($nom == '1')
        $mo = "Senin";
    if ($nom == '2')
        $mo = "Selasa";
    if ($nom == '3')
        $mo = "Rabu";
    if ($nom == '4')
        $mo = "Kamis";
    if ($nom == '5')
        $mo = "Jumat";
    if ($nom == '6')
        $mo = "Sabtu";
    if ($nom == '7')
        $mo = "Minggu";
    return $mo;
}

function calculate_age($tgl) {
    $tanggal = explode("/", $tgl);
    $tahun = $tanggal[2];
    $bulan = $tanggal[1];
    $hari = $tanggal[0];

    $day = date('d');
    $month = date('m');
    $year = date('Y');

    $tahun = $year - $tahun;
    $bulan = $month - $bulan;
    $hari = $day - $hari;

    $jumlahHari = 0;
    $bulanTemp = ($month == 1) ? 12 : $month - 1;
    if ($bulanTemp == 1 || $bulanTemp == 3 || $bulanTemp == 5 || $bulanTemp == 7 || $bulanTemp == 8 || $bulanTemp == 10 || $bulanTemp == 12) {
        $jumlahHari = 31;
    } else if ($bulanTemp == 2) {
        if ($tahun % 4 == 0)
            $jumlahHari = 29;
        else
            $jumlahHari = 28;
    }else {
        $jumlahHari = 30;
    }

    if ($hari < 0) {
        $hari += $jumlahHari;
        $bulan--;
    }
    if ($bulan < 0 || ($bulan == 0 && $tahun != 0)) {
        $bulan += 12;
        $tahun--;
    }
    if ($bulan == 12) {
        $bulan = 0;
        $tahun += 1;
    }
    if ($tahun == '0') {
        $tahunz = '';
    } else {
        $tahunz = $tahun . " <sup>Th</sup> ";
    }
    return $tahunz . $bulan . " <sup>Bln</sup> ";
}

function get_hour($jam) {
    $var = explode(" ", $jam);
    return $var[1];
}

function IntervalDays($CheckIn, $CheckOut) {
    $CheckInX = explode("-", $CheckIn);
    $CheckOutX = explode("-", $CheckOut);
    $date1 = mktime(0, 0, 0, $CheckInX[1], $CheckInX[2], $CheckInX[0]);
    $date2 = mktime(0, 0, 0, $CheckOutX[1], $CheckOutX[2], $CheckOutX[0]);
    $interval = ($date2 - $date1) / (3600 * 24);
// returns numberofdays
    return $interval;
}

function normal_currency($jml) {
    $dcm_cvt = explode('.', $jml);
    $int = empty($jml) ? 0 : number_format($jml, 0, ',', '.');
    return $int;
}

function timeAgo($timestamp) {
    $today = time();
    $createdday = strtotime($timestamp);
    $datediff = abs($today - $createdday);
    $difftext = "";
    $years = floor($datediff / (365 * 60 * 60 * 24));
    $months = floor(($datediff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($datediff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
    $hours = floor($datediff / 3600);
    $minutes = floor($datediff / 60);
    $seconds = floor($datediff);
    //year checker
    if ($difftext == "") {
        if ($years > 1)
            $difftext = $years . " years ago";
        elseif ($years == 1)
            $difftext = $years . " year ago";
    }
    //month checker
    if ($difftext == "") {
        if ($months > 1)
            $difftext = $months . " months ago";
        elseif ($months == 1)
            $difftext = $months . " month ago";
    }
    //month checker
    if ($difftext == "") {
        if ($days > 1)
            $difftext = $days . " days ago";
        elseif ($days == 1)
            $difftext = $days . " day ago";
    }
    //hour checker
    if ($difftext == "") {
        if ($hours > 1)
            $difftext = $hours . " hours ago";
        elseif ($hours == 1)
            $difftext = $hours . " hour ago";
    }
    //minutes checker
    if ($difftext == "") {
        if ($minutes > 1)
            $difftext = $minutes . " minutes ago";
        elseif ($minutes == 1)
            $difftext = $minutes . " minute ago";
    }
    //seconds checker
    if ($difftext == "") {
        if ($seconds > 1)
            $difftext = $seconds . " seconds ago";
        elseif ($seconds == 1)
            $difftext = $seconds . " second ago";
    }
    return $difftext;
}
