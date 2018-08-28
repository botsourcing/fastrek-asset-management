<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <link href='<?php echo base_url("assets/upload/images/$favicon"); ?>' rel='shortcut icon' type='image/x-icon' />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/vendor/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/vendor/AdminLTE-2.4.3/css/adminlte.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/vendor/AdminLTE-2.4.3/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>PROJEK</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
		
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          SELAMAT DATANG DIHALAMAN HOME!
          <small>Aset Management</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
          Ini adalah aplikasi Aset Management..<br>
			Silahkan bagi yang sudah punya akun bisa mengakses halaman login dibawah ini: <br>
			<a href="<?php echo base_url('index.php/auth/login');?>">LOGIN</a>
          </div>
          <div class="box-body"> 
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <strong>2018 PROJEK_OM
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets');?>/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets');?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets');?>/vendor/jquery/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets');?>/vendor/jquery/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets');?>/vendor/AdminLTE-2.4.3/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets');?>/vendor/AdminLTE-2.4.3/js/demo.js"></script>
</body>
</html>
