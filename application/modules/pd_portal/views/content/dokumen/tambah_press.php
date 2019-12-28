<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $title ?></title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/css/sb-admin.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
    .fileinput-remove,
    .fileinput-upload{
      display: none;
    }

  </style>
</head>

<body id="page-top">

  <?php $this->load->view('../componen/navigation')?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('../componen/sidebar')?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo base_url()?>portal">Dashboard</a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?php echo base_url()?>portal/press">Press</a>
          </li>
          <li class="breadcrumb-item active">Add Press</li>
        </ol>

        <!-- DataTables Example -->
       <!--  <pre>
          <?php print_r($show)?>
        </pre> -->


        <div class="card mb-3">
          <div class="card-header">

            <div class="card-body">
              <section class="content">
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Form Data Tambah Press</h3>
                  </div>
                  <div class="box-body">
                    <!-- form start -->
                    <?php echo form_open_multipart('portal/press/insert_press'); ?> 

                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input type="text" class="form-control" name="judul" placeholder="Judul"/>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Tempat</label>
                      <input type="text" class="form-control" name="tempat" placeholder="Tempat"/>
                    </div>


                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="text" class="form-control" name="tanggal" id="datepicker" data-date-format="yyyy-mm-dd" placeholder="Tanggal "/>
                    <script>
                      $('#datepicker').datepicker({
                        format: 'yyyy/mm/dd',
                        uiLibrary: 'bootstrap4'
                      });
                    </script>
<!-- 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Content</label>
                      <div id="summernote"></div>
                    </div>
                  -->

                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                      <textarea class="form-control" rows="3" name="deskripsi" placeholder="Deskripsi"></textarea>
                  </div>

                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <div class="file-loading">
                      <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                    </div>
                  </div> -->




                  <div class="form-group">
                    <label for="exampleInputEmail1">Tipe</label>
                    <select class="browser-default custom-select custom-select-md mb-3" name="tipe_artikel">
                      <option value="1">National Initiative</option>
                      <option value="2">Workshop</option>
                    </select>
                  </div>
                       <!-- <div class="form-group">
                    <label for="name">Upload </label>
                    <br>
                    <input type="file" name="dokumen" />
                  </div>    -->


                    <!-- <div class="form-group">
                      <label for="exampleInputEmail1">Event</label>
                      <select class="browser-default custom-select custom-select-md mb-3" name="event">
                 
                        <?php 
                        foreach($kegiatan as $k){
                        ?>
                        <option value="<?php echo $k->id?>"> <?php echo $k->judul?> </option>
                        <?php }?>

                      </select>
                    </div> -->


                    <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->

          <!-- Sticky Footer -->
          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2019</span>
              </div>
            </div>
          </footer>

        </div>
        <!-- /.content-wrapper -->

      </div>
      <!-- /#wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar ?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Pilih tombol "Logout" dibawah ini jika anda yakin ingin keluar.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url() ?>assets/plugins/jquery-easing/jquery.easing.min.js"></script>

      <!-- Page level plugin JavaScript-->
      <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>

      <!-- Demo scripts for this page-->
      <script src="<?php echo base_url() ?>assets/js/datatables-demo.js"></script>

      <script src="<?php echo base_url() ?>assets/plugins/summernote/summernote-bs4.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/tinymce/tinymce.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
      <script>
        $('#summernote').summernote({
          placeholder: 'Hello bootstrap 4',
          tabsize: 2,
          height: 100
        });

        tinymce.init({
          selector: "textarea",
          theme: "modern",
          image_advtab: true,
          menubar: false,
          subfolder: "content",
          relative_urls: false,
          plugins: [
          "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
          "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
          "save table contextmenu directionality emoticons template paste textcolor"
          ],
          toolbar: "bold italic | alignleft alignright | bullist numlist outdent indent",
        });
      </script>
      <script type="text/javascript">
        $("#file-1").fileinput({
          theme: 'fa',
          uploadUrl: "/imageUpload.php",
          allowedFileExtensions: ['jpg', 'png', 'gif'],
          overwriteInitial: false,
          maxFileSize:2000,
          maxFilesNum: 10,
          slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
          }
        });
      </script>
    </body>

    </html>
