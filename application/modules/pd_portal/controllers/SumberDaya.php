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

    function insert_resources()
    {
        $judul = $this->input->post('judul');
        $tempat = $this->input->post('tempat');
        $tanggal = $this->input->post('tanggal');
        $deskripsi = $this->input->post('deskripsi');
        $tipe = $this->input->post('tipe');

        $event = $this->input->post('tipe') == 1 ? $this->input->post('event') : 0;
        $object = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'tanggal' => $tanggal,
            'tempat' => $tempat,
            'dokumen' => 'assets/files/resources/'. $this->_uploadImage3(),
            'is_event' => $tipe,
            'event' => $event
        );
        //     $this->kegiatan = $this->_uploadImage3();
        $test = $this->db->insert('pl_resource', $object);
        redirect('portal/resource', 'refresh');
    }

    


    private function _uploadImage3()
    {
        $config['upload_path']          = './assets/files/resources/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|ppt|pptx|doc|docx';
        $config['file_name']            = time();
        $config['max_width']            = 121024;
        $config['overwrite']            = true;
        $config['max_size']             = 125600; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('dokumen')) {
            return $this->upload->data('file_name');
        } else {
            print_r($this->upload->display_errors());
            return 'default.jpg';
        }
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


    function hapus_resource($id)
    {
        $delete = $this->db->delete('pl_resource', array('resource_id' => $id));
        redirect('portal/resource', 'refresh');
    }


    function edit_resource($id)
    {
        $data['title'] = "Edit Plurilateral Document";
        $data['editdata']  = $this->db->get_where('pl_resource', array('resource_id' => $id))->result_object();
        $data['resource'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/resource/edit_resource', $data);
    }

    function update_resource(){
        $id = $this->input->post("resource_id");
        $judul = $this->input->post('judul');
        $tempat = $this->input->post('tempat');
        $tanggal = $this->input->post('tanggal');
        $deskripsi = $this->input->post('deskripsi');
        $tipe = $this->input->post('tipe');
        $event = $this->input->post('tipe') == 1 ? $this->input->post('event') : 0;

        if(!empty($this->input->post('dokumen')))
        {
           $dokumen = $this->input->post('old_dokumen');
       } else {
        $dokumen = 'assets/files/resources/'. $this->_uploadImage3();
    }

    $object = array(
        'judul' => $judul,
        'deskripsi' => $deskripsi,
        'tanggal' => $tanggal,
        'tempat' => $tempat,
        'dokumen' => $dokumen,
        'is_event' => $tipe,
        'event' => $event
    );
   //     $this->kegiatan = $this->_uploadImage3();
    $test = $this->db->update('pl_resource', $object, array('resource_id' => $id));

    redirect('portal/resource', 'refresh');
}

}
