<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends MY_Controller {

    private $title = "Document";
    private $url = "document";

    public function __construct() {
        parent::__construct();
        // is_logged_in();
    }

    public function index() {
        $data['title'] = "Plurilateral Document";
        $data['private_url'] = "document";
        $data['show'] = $this->db->query("SELECT * FROM dokumen")->result();
        $this->load->view('content/dokumen/document', $data);
    }

    public function tambah_document() {
        $data['title'] = "Tambah Plurilateral Document";
        $data['private_url'] = "tambah_document";
        $data['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/dokumen/tambah_document', $data);
    }

    function insert_document(){

        $judul = $this->input->post('judul');
      /*  $dokumen= $this->input->post('dokumen');*/
        $event = $this->input->post('event');   
        $tipe = $this->input->post('tipe');
      
        $object = array(
            'judul' => $judul,
            'dokumen' => 'assets/files/'.$this->_uploadImage3(),
            'event' => $event,
            'tipe' => $tipe,
        );
   //     $this->dokumen = $this->_uploadImage3();
        $test = $this->db->insert('dokumen', $object);
     

    redirect('portal/document','refresh');

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

    if ($this->upload->do_upload('dokumen')) {
        return $this->upload->data('file_name');
    }
    
    else {
         return 'default.jpg';
    }
        
  
    }

    function hapus_document($id){
        
        $delete = $this->db->delete('dokumen', array('id' => $id));
    

        redirect('portal/document','refresh');
    }

    function edit_document($id){
        $a['editdata']  = $this->db->get_where('dokumen',array('id'=>$id))->result_object();       
    
            $a['kegiatan'] = $this->db->query("SELECT * FROM kegiatan")->result();
        $this->load->view('content/dokumen/edit_document',$a);
    }



        function update_dokumen(){
    
            $id = $this->input->post('id');
          $judul = $this->input->post('judul');
        $event = $this->input->post('event');   
        $tipe = $this->input->post('tipe');
      
        $object = array(
            'judul' => $judul,
            'dokumen' => 'assets/files/'.$this->_uploadImage3(),
            'event' => $event,
            'tipe' => $tipe,
        );
   //     $this->dokumen = $this->_uploadImage3();
        $test = $this->db->update('dokumen', $object, array('id' => $id));
     

    redirect('portal/document','refresh');
    }

}