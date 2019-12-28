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

	<nav class="navbar navbar-expand navbar-dark bg-primary static-top">

		<a class="navbar-brand mr-1" href="<?php echo base_url() ?>portal/document"><?php echo $title ?></a>

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			<i class="fas fa-bars"></i>
		</button>

		<ul class="navbar-nav ml-auto ">
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user-circle fa-2x"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item disabled">Hai, Admin!</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
				</div>
			</li>
		</ul>

	</nav>

	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.html">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-folder"></i>
					<span>Document</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">
					<h6 class="dropdown-header">Document types:</h6>
					<a class="dropdown-item" href="<?php echo base_url() ?>portal/document">Paper or Journal</a>

					<div class="dropdown-divider"></div>
					<h6 class="dropdown-header">Press types:</h6>
					<a class="dropdown-item" href="<?php echo base_url() ?>portal/document/press">National Initiative or <br> Workshop</a>
				</div>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url() ?>pd_portal/Kegiatan/index">
					<i class="fas fa-fw fa-chart-area"></i>
					<span>Events</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url() ?>portal/message">
					<i class="fas fa-fw fa-table"></i>
					<span>Messages</span></a>
			</li>
		</ul>

		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- Breadcrumbs-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="<?php echo base_url() ?>portal">Dashboard</a>
					</li>
					<li class="breadcrumb-item">
						<a href="<?php echo base_url() ?>portal/resource">Resource</a>
					</li>
					<li class="breadcrumb-item active">Add Resource</li>
				</ol>

				<!-- DataTables Example -->
				<!--  <pre>
          <?php print_r($show) ?>
      </pre> -->


				<div class="card mb-3">
					<div class="card-header">

						<div class="card-body">
							<section class="content">
								<div class="box box-info">
									<div class="box-header with-border">
										<h3 class="box-title">Form Data Add Resource</h3>
									</div>
									<div class="box-body">
										<!-- form start -->
										<?php echo form_open_multipart('pd_portal/Kegiatan/insert_kegiatan'); ?>
										<div class="form-group">
											<label for="exampleInputEmail1">Judul</label>
											<input type="text" class="form-control" name="judul" placeholder="Nama" />
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Deskripsi</label>
											<textarea class="form-control" rows="3" name="deskripsi_kegiatan" placeholder="Deskripsi"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Tempat</label>
											<input type="text" class="form-control" name="tempat" placeholder="Tempat" />
										</div>
										<div class="form-group">
											<label for="example-date-input">Tanggal</label>
											<input class="form-control" type="date" name="tanggal" id="example-date-input">
										</div>
										<div class="form-group">
											<label for="example-date-input">Dokumen</label>
											<div class="custom-file">
												<input type="file" name="dokumen" class="custom-file-input" id="customFile">
												<label class="custom-file-label" for="customFile">Choose file</label>
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Tipe</label>
											<select class="browser-default custom-select custom-select-md tipe-event" name="tipe">
												<option value="0">Non-Event</option>
												<option value="1">Event</option>
											</select>
										</div>
										<div class="form-group event-choose">
											<label for="exampleInputEmail1">Event</label>
											<select class="browser-default custom-select custom-select-md mb-3" name="eventkey">
												<?php foreach ($kegiatan as $k) { ?>
													<option value="<?php echo $k->kegiatan_id;?>"><?php echo $k->nama;?></option>
												<?php } ?>
											</select>
										</div>
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
		<script src="<?php echo base_url() ?>assets/plugins/tinymce/tinymce.min.js"></script>

		<!-- Page level plugin JavaScript-->
		<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>

		<!-- Demo scripts for this page-->
		<script src="<?php echo base_url() ?>assets/js/datatables-demo.js"></script>
</body>

</html>

<script type="text/javascript">
	$(".event-choose").hide();

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