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
            <a href="<?php echo base_url() ?>portal">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Event</li>
        </ol>

        <!-- DataTables Example -->
        <!--  <pre>
          <?php print_r($show) ?>
        </pre> -->

        <h3 class="box-title">
          <a href="<?php echo base_url(); ?>portal/event/tambah_kegiatan" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</a>
        </h3>

        <div class="card mb-3">

          <div class="card-header">
            <i class="fas fa-table"></i>
            Event Table</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>tipe</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $no = 1;
                  $id = 1;
                  if (!empty($show)) {
                    foreach ($show as $lihat) {
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td>
                          <div style="width: 150px;"> <?php echo ucwords($lihat->nama) ?>
                        </td>
                        <td>
                          <div style="width: 150px;"> <?php echo ucwords($lihat->deskripsi_kegiatan) ?>
                        </td>
                        <td>
                          <div style="width: 150px;"> <?php echo ucwords($lihat->tanggal_mulai) ?>
                        </td>
            </div>
            <!-- <td>
              <div style="width: 250px;"> <a href="<?php echo base_url('/assets/files/' . $lihat->dokumen) ?>" width="64"> <?php echo base_url('upload/files/' . $lihat->dokumen) ?> </a>
            </td> -->

            <td>
              <div style="width: 150px;"><?php echo ucwords($lihat->tanggal_selesai) ?>
            </td>
            <td><div style="width: 100px;"><?php echo ucwords($lihat->tipe) ?></td>
            <td align="center">
              <div class="btn-group" role="group" style="width: 200px;">
                <a href="<?php echo base_url(); ?>portal/event/update_kegiatan/<?php echo $lihat->kegiatan_id ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                <a href="<?php echo base_url(); ?>portal/event/hapus_kegiatan/<?php echo $lihat->kegiatan_id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
            </td>
            </tr>
        <?php }
        } ?>
        </tbody>
        </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright ©Plurilateral 2019</span>
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

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url() ?>assets/js/datatables-demo.js"></script>
</body>

</html>