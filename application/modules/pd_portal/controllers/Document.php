<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Document extends MY_Controller
{

    private $title = "Document";
    private $url = "document";

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Plurilateral Document";
        $data['private_url'] = "document";
        $data['show'] = $this->db->query("SELECT * FROM dokumen d LEFT JOIN kegiatan k ON k.kegiatan_id = d.event")->result();
        $this->load->view('content/dokumen/document', $data);
    }

    function update_dokumen(){

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $event = $this->input->post('event');   
        $tipe = $this->input->post('tipe_dokumen');

        $object = array(
            'judul' => $judul,
            'dokumen' => 'assets/files/'.$this->_uploadImage3(),
            'event' => $event,
            'tipe_dokumen' => $tipe,
        );
   //     $this->dokumen = $this->_uploadImage3();
        $test = $this->db->update('dokumen', $object, array('dokumen_id' => $id));

        redirect('portal/document','refresh');
    }




    public function message()
    {
        $data['title'] = "Plurilateral Message";
        $data['private_url'] = "message";
        // $data['show'] = $this->db->query("SELECT * FROM dokumen")->result();
        $this->load->view('content/dokumen/message', $data);
    }

    public function tambah_document()
    {
        $data['title'] = "Tambah Plurilateral Document";
        $data['private_url'] = "tambah_document";
        $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/dokumen/tambah_document', $data);
    }



    public function imageUpload()
    {
        $data['title'] = "Add Plurilateral National Initiative Article";
        $data['private_url'] = "imageUpload";
        // $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/dokumen/imageUpload', $data);
    }


    function insert_document()
    {
        $judul = $this->input->post('judul');
        /*  $dokumen= $this->input->post('dokumen');*/
        $event = $this->input->post('event');
        $tipe = $this->input->post('tipe');

        $object = array(
            'judul' => $judul,
            'dokumen' => 'assets/files/' . $this->_uploadImage3(),
            'event' => $event,
            'tipe_dokumen' => $tipe,
        );
        //     $this->dokumen = $this->_uploadImage3();
        $test = $this->db->insert('dokumen', $object);


        redirect('portal/document', 'refresh');
    }


    private function _uploadImage3()
    {
        $config['upload_path']          = './assets/files/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|ppt|pptx';
        $config['file_name']            = time();
        $config['overwrite']            = true;
        $config['max_size']             = 125600; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('dokumen')) {
            return $this->upload->data('file_name');
        } else {
            return 'default.jpg';
        }
    }

    function hapus_document($id)
    {
        $delete = $this->db->delete('dokumen', array('dokumen_id' => $id));
        redirect('portal/document', 'refresh');
    }

    function edit_document($id)
    {
        $data['title'] = "Edit Plurilateral Document";
        $data['editdata']  = $this->db->get_where('dokumen', array('dokumen_id' => $id))->result_object();
        $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/dokumen/edit_document', $data);
    }


    
    //National initiative
    public function national_initiative()
    {
        $data['title'] = "Plurilateral National Initiative";
        $data['private_url'] = "national";
        $data['show'] = $this->db->query("SELECT * FROM artikel")->result();
        $this->load->view('content/dokumen/national_initiative', $data);
    }

    public function tambah_national()
    {
        $data['title'] = "Add Plurilateral National Initiative Article";
        $data['private_url'] = "tambah_national";
        // $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/dokumen/tambah_national', $data);
    }

    public function edit_national($id)
    {
        $data['title'] = "Add Plurilateral Workshop Article";
        $data['editdata']  = $this->db->get_where('artikel', array('artikel_id' => $id))->result_object();
        $data['national'] = $this->db->query("SELECT * FROM artikel")->result();
        $this->load->view('content/dokumen/edit_national', $data);
    }

    function update_national(){

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $tanggal = $this->input->post('tanggal');   
        $tempat = $this->input->post('tempat');
        $deskripsi = $this->input->post('deskripsi');
        $tipe_artikel = $this->input->post('tipe_artikel');
        $object = array(
            'judul' => $judul,
            'gambar' => 'assets/files/'.$this->upload_gambar_national(),
            'tanggal' => $tanggal,
            'tempat' => $tempat,
            'deskripsi' => $deskripsi,
            'tipe_artikel' => $tipe_artikel,
        );
   //     $this->dokumen = $this->_uploadImage3();
        $test = $this->db->update('artikel', $object, array('artikel_id' => $id));

        redirect('portal/document/national', 'refresh');
    }

    function insert_national()
    {
        $judul = $this->input->post('judul');
        /*  $dokumen= $this->input->post('dokumen');*/
        $tempat = $this->input->post('tempat');
        $tanggal = $this->input->post('tanggal');
        $deskripsi = $this->input->post('deskripsi');
$tipe_artikel = $this->input->post('tipe_artikel');
        $object = array(
            'judul' => $judul,
            'tempat' => $tempat,
            'tanggal' => $tanggal,
            'deskripsi' => $deskripsi,
            'gambar' => 'assets/storage/national/'.$this->upload_gambar_national(),
            'tipe_artikel' => $tipe_artikel,
        );
        //     $this->dokumen = $this->_uploadImage3();
        $test = $this->db->insert('artikel', $object);


        redirect('portal/document/national', 'refresh');
    }

    private function upload_gambar_national()
    {
        $config['upload_path']          = './assets/storage/national/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['file_name']            = time();
        $config['overwrite']            = true;
        $config['max_size']             = 25600; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data('file_name');
        } else {
            return 'default.jpg';
        }
    }

    function hapus_national($id)
    {
        $delete = $this->db->delete('artikel', array('artikel_id' => $id));
        redirect('portal/document/national', 'refresh');
    }



  //Workshop
    public function workshop()
    {
        $data['title'] = "Plurilateral Workshop";
        $data['private_url'] = "Workshop";
        $data['show'] = $this->db->query("SELECT * FROM artikel")->result();
        $this->load->view('content/dokumen/workshop', $data);
    }

    public function tambah_workshop()
    {
        $data['title'] = "Add Plurilateral National Initiative Article";
        $data['private_url'] = "tambah_national";
        // $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/dokumen/tambah_national', $data);
    }

    public function edit_workshop($id)
    {
        $data['title'] = "Add Plurilateral Workshop Article";
        $data['editdata']  = $this->db->get_where('artikel', array('artikel_id' => $id))->result_object();
        $data['national'] = $this->db->query("SELECT * FROM artikel")->result();
        $this->load->view('content/dokumen/edit_national', $data);
    }

    function update_workshop(){

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $tanggal = $this->input->post('tanggal');   
        $tempat = $this->input->post('tempat');
        $deskripsi = $this->input->post('deskripsi');
        $object = array(
            'judul' => $judul,
            'gambar' => 'assets/files/'.$this->upload_gambar_national(),
            'tanggal' => $tanggal,
            'tempat' => $tempat,
            'deskripsi' => $deskripsi,
            'tipe_artikel' => 'national',
        );
   //     $this->dokumen = $this->_uploadImage3();
        $test = $this->db->update('artikel', $object, array('artikel_id' => $id));

        redirect('portal/document/national', 'refresh');
    }

    function insert_workshop()
    {
        $judul = $this->input->post('judul');
        /*  $dokumen= $this->input->post('dokumen');*/
        $tempat = $this->input->post('tempat');
        $tanggal = $this->input->post('tanggal');
        $deskripsi = $this->input->post('deskripsi');

        $object = array(
            'judul' => $judul,
            'tempat' => $tempat,
            'tanggal' => $tanggal,
            'deskripsi' => $deskripsi,
            'gambar' => 'assets/storage/national/'.$this->upload_gambar_national(),
            'tipe_artikel' => 'national',
        );
        //     $this->dokumen = $this->_uploadImage3();
        $test = $this->db->insert('artikel', $object);


        redirect('portal/document/national', 'refresh');
    }

    private function upload_gambar_workshop()
    {
        $config['upload_path']          = './assets/storage/national/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['file_name']            = time();
        $config['overwrite']            = true;
        $config['max_size']             = 25600; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data('file_name');
        } else {
            return 'default.jpg';
        }
    }

    function hapus_workshop($id)
    {
        $delete = $this->db->delete('artikel', array('artikel_id' => $id));
        redirect('portal/document/national', 'refresh');
    }


}
