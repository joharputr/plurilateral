<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo $title ?></title>
	<link href="<?php echo base_url() ?>assets/css/css/sb-admin.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">


	<!-- Page level plugin CSS-->
	<link href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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
								<a href="<?php echo base_url()?>pd_portal/Kegiatan/index">Event</a>
							</li>
							<li class="breadcrumb-item active">Edit Event</li>
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
      						<h3 class="box-title">Form Data Edit Event</h3>
      					</div>
      					<div class="box-body">
      						<!-- form start -->
      						<?php echo form_open_multipart('portal/resource/update_resource'); ?>
      						<?php  
      						foreach ($editdata as $data):
      							?>


      							<input type="hidden"  class="form-control" name="resource_id" placeholder="Judul" value="<?php echo $data->resource_id ?>"/>


      							<div class="form-group">
      								<label for="exampleInputEmail1">Judul</label>
      								<input type="text" class="form-control" name="judul" placeholder="judul" value="<?php echo $data->judul ?>"/>
      							</div>

      						  <div class="form-group">
                      <label for="exampleInputEmail1">Deskripsi</label>
                      <textarea class="form-control" rows="3" name="deskripsi" placeholder="Deskripsi"><?php echo $data->deskripsi ?></textarea>
                    </div>

                      <div class="form-group">
                      <label for="exampleInputEmail1">Tempat</label>
                      <input type="text" class="form-control" name="tempat" placeholder="tempat" value="<?php echo $data->tempat ?>"/>
                    </div>
      							<div class="form-group">
      								<label for="example-date-input">Tanggal</label>
      								<input class="form-control" type="date" name="tanggal" id="example-date-input"  value="<?php echo $data->tanggal ?>">
      							</div>
                        <div class="form-group">
                      <label for="example-date-input">Dokumen</label>
                      <div class="custom-file">
                        <input type="file" name="dokumen" class="custom-file-input" id="customFile">
                        <input type="hidden" name="old_dokumen" value="<?php echo $data->dokumen?>"/>
                        <label class="custom-file-label" for="customFile"><?php echo empty($data->dokumen) ? "Choose file" : $data->dokumen?></label>
                      </div>
                    </div>
      							</div>
      						  <div class="form-group">
                      <label for="exampleInputEmail1">Tipe</label>
                      <select class="browser-default custom-select custom-select-md tipe-event" name="tipe">
                        <option value="0">Non-Event</option>
                        <option value="1" <?php echo $data->is_event == 1 ? 'selected' : ''?>>Event</option>
                      </select>
                    </div>
                    <div class="form-group event-choose">
                      <label for="exampleInputEmail1">Event</label>
                      <select class="browser-default custom-select custom-select-md mb-3" name="event">
                        <?php foreach ($resource as $k) { ?>
                          <option value="<?php echo $k->kegiatan_id;?>" <?php echo $data->event == $k->kegiatan_id ? 'selected' : ''?>><?php echo $k->nama;?></option>
                        <?php } ?>
                      </select>
                    </div>

      							<button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>

      						<?php endforeach ?>
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
  <script src="<?php echo base_url() ?>assets/plugins/tinymce/tinymce.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/plugins/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url() ?>assets/js/datatables-demo.js"></script>
</body>


<script type="text/javascript">
  $(".event-choose").hide();

  if ($(".tipe-event").val() == 1) {
      $(".event-choose").show();
    }

  $(".tipe-event").on("change", function() {
    if ($(".tipe-event").val() == 1) {
      $(".event-choose").show();
    } else {
      $(".event-choose").hide();
    }
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

  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>
</html>
