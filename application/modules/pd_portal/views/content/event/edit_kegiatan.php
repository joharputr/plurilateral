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
      						<?php echo form_open_multipart('portal/event/edit_kegiatan'); ?>
      						<?php  
      						foreach ($editdata as $data):
      							?>


      							<input type="hidden"  class="form-control" name="kegiatan_id" placeholder="Judul" value="<?php echo $data->kegiatan_id ?>"/>


      							<div class="form-group">
      								<label for="exampleInputEmail1">Nama</label>
      								<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $data->nama ?>"/>
      							</div>

                    <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea class="form-control" rows="3" name="deskripsi_kegiatan" placeholder="Deskripsi"><?php echo $data->deskripsi_kegiatan ?></textarea>
                  </div>

      							<div class="form-group">
      								<label for="example-date-input">Tanggal Mulai</label>
      								<input class="form-control" type="date" name="tanggal_mulai" id="example-date-input"  value="<?php echo $data->tanggal_mulai ?>">
      							</div>



      							<div class="form-group">
      								<label for="example-date-input">Tanggal Selesai</label>
      								<input class="form-control" type="date" name="tanggal_selesai" id="example-date-input"  value="<?php echo $data->tanggal_selesai ?>">
      							</div>
      							<div class="form-group">
      								<label for="exampleInputEmail1">Tipe</label>
      								<select class="browser-default custom-select custom-select-md mb-3" name="tipe">
      									<option value="national" <?php if ($data->tipe == 'national'): ?>
      									selected
      									<?php endif ?>>national</option>
      									<option value="international" <?php if ($data->tipe == 'international'): ?>
      									selected
      									<?php endif ?>>international</option>
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


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/plugins/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/tinymce/tinymce.min.js"></script>
  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url() ?>assets/js/datatables-demo.js"></script>
  <script type="text/javascript">
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
</body>

</html>
