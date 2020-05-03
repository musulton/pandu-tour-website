<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIG Wisata Palabuhan Ratu Kabupaten Sukabumi</title>
  <link href="<?php echo base_url().'assets/dist/img/favorit.png' ?>" rel="shortcut icon" type="image/ico" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url().'assets/' ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url().'assets/' ?>plugins/select2/select2.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url().'assets/' ?>plugins/datatables/dataTables.bootstrap.css">
  <!-- CKEditor -->
  <script type="text/javascript" src="<?=base_url().'assets/' ?>plugins/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="<?=base_url().'assets/' ?>plugins/ckeditor/style.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url().'assets/' ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url().'assets/' ?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini"  onload="initialize()">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?=base_url().'dashboard/' ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SIG</b> Wisata</span>
        </a>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url().'assets/' ?>dist/img/favorit.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?=$this->session->userdata('nama') ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Navigasi</li>
            <li class="treeview">
              <a href="<?=base_url().'dashboard/index' ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Lokasi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url().'dashboard/lokasi_tambah' ?>"><i class="fa fa-circle-o"></i> Tambah Lokasi</a></li>
                <li><a href="<?=base_url().'dashboard/lokasi' ?>"><i class="fa fa-circle-o"></i> Daftar Lokasi</a></li>
                <li><a href="<?=base_url().'dashboard/lokasi_kategori' ?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
              </ul>
            </li>
            <li class="header">Download</li>
            <li><a href="<?=base_url() ?>" target="_blank"><i class="fa fa-eye text-green"></i> <span>Download APK</span></a></li>
            <li class="header">A U T H</li>
            <li><a href="<?=base_url().'admin/logout' ?>"><i class="fa fa-circle-o text-red"></i> <span>Keluar</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <?php echo $contents ?>
    <!-- /.content-wrapper -->
    
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Skripsi</b> TI - UMMI
        </div>
        <strong>Copyright &copy; 2018</strong> <a href="<?=base_url() ?>">SIG Wisata Palabuhan Ratu Kabupaten Sukabumi</a> oleh Yusuf
    </footer>
    
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?=base_url().'assets/' ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url().'assets/' ?>bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?=base_url().'assets/' ?>plugins/select2/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url().'assets/' ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url().'assets/' ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url().'assets/' ?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url().'assets/' ?>dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>
</body>
</html>