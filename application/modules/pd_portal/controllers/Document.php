<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Document extends MY_Controller
{

    private $title = "Document";
    private $url = "document";

    public function __construct()
    {
        parent::__construct();

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

        if (!empty($_FILES["dokumen"]["name"])) {
            //milih file
            $dokumen = $this->_uploadImage3();
            $object = array(
                'judul' => $judul,
                'dokumen' => 'assets/files/'. $dokumen,
                'event' => $event,
                'tipe_dokumen' => $tipe,
            );   
        } else {
            $dokumen = $this->input->post('old_dokumen');
            $object = array(
                'judul' => $judul,
                'dokumen' => $dokumen,
                'event' => $event,
                'tipe_dokumen' => $tipe,
            );   
        }
        
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
        $data['title'] = "Add Plurilateral National Initiative or Workshop Form";
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


    //press initiative
    public function press()
    {
        $data['title'] = "Plurilateral National Initiative or Workshop";
        $data['private_url'] = "press";
        $data['show'] = $this->db->query("SELECT * FROM artikel")->result();
        $this->load->view('content/dokumen/press', $data);
    }

    public function tambah_press()
    {
        $data['title'] = "Add Plurilateral National Initiative or Workshop";
        $data['private_url'] = "tambah_press";
        // $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/dokumen/tambah_press', $data);
    }

    public function edit_press($id)
    {
        $data['title'] = "Add Plurilateral Workshop Article";
        $data['editdata']  = $this->db->get_where('artikel', array('artikel_id' => $id))->result_object();
        $data['press'] = $this->db->query("SELECT * FROM artikel")->result();
        $this->load->view('content/dokumen/edit_press', $data);
    }

    function update_press(){

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $tanggal = $this->input->post('tanggal');   
        $tempat = $this->input->post('tempat');
        $deskripsi = $this->input->post('deskripsi');
        $tipe_artikel = $this->input->post('tipe_artikel');
        $object = array(
            'judul' => $judul,
            'gambar' => 'assets/files/'.$this->upload_gambar_press(),
            'tanggal' => $tanggal,
            'tempat' => $tempat,
            'deskripsi' => $deskripsi,
            'tipe_artikel' => $tipe_artikel,
        );
   //     $this->dokumen = $this->_uploadImage3();
        $test = $this->db->update('artikel', $object, array('artikel_id' => $id));

        redirect('portal/document/press', 'refresh');
    }

    function insert_press()
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
            'gambar' => 'assets/storage/press/'.$this->upload_gambar_press(),
            'tipe_artikel' => $tipe_artikel,
        );
        //     $this->dokumen = $this->_uploadImage3();
        $test = $this->db->insert('artikel', $object);


        redirect('portal/document/press', 'refresh');
    }

    private function upload_gambar_press()
    {
        $config['upload_path']          = './assets/storage/press/';
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

    function hapus_press($id)
    {
        $delete = $this->db->delete('artikel', array('artikel_id' => $id));
        redirect('portal/document/press', 'refresh');
    }


}
