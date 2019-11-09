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

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo base_url()?>portal/document"><?php echo $title ?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
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
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
          </li>
        </ul>

        <div id="content-wrapper">

          <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Tables</li>
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
                    <h3 class="box-title">Form Data Tambah Dokumen</h3>
                  </div>
                  <div class="box-body">
                    <!-- form start -->
                    <?php echo form_open_multipart('portal/document/edit'); ?>
                 <?php  
                foreach ($editdata as $data):
                ?>

              
                      <input type="hidden"  class="form-control" name="id" placeholder="Judul" value="<?php echo $data->id ?>"/>
                   

                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $data->judul ?>"/>
                    </div>

                     <div class="form-group">
                    <label for="name">Upload </label>
                    <br>
                    <input type="file" name="dokumen"  />
                 </div>   
                    <div class="form-group">
                      <label for="exampleInputEmail1">Event</label>
                      <select class="browser-default custom-select custom-select-md mb-3" name="event">
                 
                        <?php 
                        foreach($kegiatan as $k){
                        ?>
                        <option value="<?php echo $k->id?>"> <?php echo $k->judul?> </option>
                        <?php }?>

                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tipe</label>
                      <select class="browser-default custom-select custom-select-md mb-3" name="tipe">
                        <option value="paper" <?php if ($data->tipe == 'paper'): ?>
                          selected
                        <?php endif ?>>Paper</option>
                        <option value="jurnal" <?php if ($data->tipe == 'jurnal'): ?>
                          selected
                        <?php endif ?>>Jurnal</option>
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
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
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
    </body>

    </html>
