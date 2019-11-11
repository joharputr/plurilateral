<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SumberDaya extends MY_Controller
{

    private $title = "Resource";
    private $url = "resource";

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("portal/login"));
        }
    }

    public function index()
    {
        $data['title'] = "Plurilateral Resource";
        $data['private_url'] = "resource";
        $data['show'] = $this->db->query("SELECT * FROM pl_resource")->result();
        $this->load->view('content/resource/index', $data);
    }

    public function add()
    {
        $data['title'] = "Add Plurilateral Resource";
        $data['private_url'] = "add";
        $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/resource/tambah', $data);
    }

    function insert()
    {
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi_kegiatan');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $tanggal_selesai = $this->input->post('tanggal_selesai');
        $tipe = $this->input->post('tipe');

        $object = array(
            'nama' => $nama,
            'deskripsi_kegiatan' => $deskripsi,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'tipe' => $tipe,
        );
        //     $this->kegiatan = $this->_uploadImage3();
        $test = $this->db->insert('kegiatan', $object);
        redirect('portal/event', 'refresh');
    }

//     function edit_kegiatan(){
//         $id = $this->input->post("kegiatan_id");
//         $nama = $this->input->post('nama');
//         $deskripsi = $this->input->post('deskripsi_kegiatan');
//         $tanggal_mulai = $this->input->post('tanggal_mulai');
//         $tanggal_selesai = $this->input->post('tanggal_selesai');
//         $tipe = $this->input->post('tipe');

//         $object = array(
//             'nama' => $nama,
//             'deskripsi_kegiatan' => $deskripsi,
//             'tanggal_mulai' => $tanggal_mulai,
//             'tanggal_selesai' => $tanggal_selesai,
//             'tipe' => $tipe,
//         );
//    //     $this->kegiatan = $this->_uploadImage3();
//         $test = $this->db->update('kegiatan', $object, array('kegiatan_id' => $id));

//         redirect('portal/event', 'refresh');
//     }



    public function imageUpload()
    {
        $data['title'] = "Add Plurilateral National Initiative Article";
        $data['private_url'] = "imageUpload";
        // $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/kegiatan/imageUpload', $data);
    }


    


    private function _uploadImage3()
    {
        $config['upload_path']          = './assets/files/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['file_name']            = time();
        $config['overwrite']            = true;
        $config['max_size']             = 25600; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('kegiatan')) {
            return $this->upload->data('file_name');
        } else {
            return 'default.jpg';
        }
    }

    function hapus_kegiatan($id)
    {
        $delete = $this->db->delete('kegiatan', array('kegiatan_id' => $id));
        redirect('portal/event', 'refresh');
    }

    function update_kegiatan($id)
    {
        $data['title'] = "Edit Plurilateral kegiatan";
        $data['editdata']  = $this->db->get_where('kegiatan', array('kegiatan_id' => $id))->result_object();
        $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/resource/edit_kegiatan', $data);
    }

}
