<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sepintas | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets_frontend/img/favicon.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <a href="<?php echo base_url(); ?>"> <!-- logo button home-->
  <div class="login-box">
    <div class="login-logo">
      <img src="<?php echo base_url(); ?>assets_frontend/img/logo.png" alt="Logo">
    </div></a>
    <!-- /.login-logo -->

    <div class="login-box-body">
      <p class="login-box-msg">REGISTER AKUN</p>

      <form action="<?php echo base_url().'registrasi/aksi' ?>" method="post">

      <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Nama" name="nama">
        </div>
        <?php echo form_error('nama'); ?>

        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Email" name="email">
        </div>
        <?php echo form_error('email'); ?>

        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username">

        </div>
        <?php echo form_error('username'); ?>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <?php echo form_error('password'); ?>

        <div class="form-group has-feedback">
          <select class="form-control" name="level">
              <option value="">-Pilih Level-</option>
              <option value="penulis">Penulis</option>
            </select>
        </div>
        <?php echo form_error('level'); ?>

        <div class="form-group has-feedback">
          <select class="form-control" name="status">
              <option value="">-Pilih Status-</option>
              <option value="1">Aktif</option>
            </select>
        </div>
        <?php echo form_error('status'); ?>

        <div class="row">
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
          </div>
          <!-- /.col -->
        </div>

      </form>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>
</html>
