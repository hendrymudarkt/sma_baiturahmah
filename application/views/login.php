<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>SMA Baiturrahmah</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo site_url('plugins/sweetalert2/sweetalert2.min.css'); ?>">
</head>
<!--Coded with love by Mutiullah Samim-->

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>SMA</b>Baiturrahmah</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="<?php echo site_url('login/aksi_login') ?>" method="post">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
            value="<?php echo $this->security->get_csrf_hash(); ?>">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" value="" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" value="" placeholder="Password" id="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-eye-slash" id="eye"></span>
              </div>
            </div>
          </div>
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="level" value="1">
              <label for="remember">
                Login sebagai siswa
              </label>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  <script src="<?php echo site_url('plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(function () {
      $('#eye').click(function () {
        if ($(this).hasClass('fa-eye-slash')) {
          $(this).removeClass('fa-eye-slash');
          $(this).addClass('fa-eye');
          $('#password').attr('type', 'text');
        } else {
          $(this).removeClass('fa-eye');
          $(this).addClass('fa-eye-slash');
          $('#password').attr('type', 'password');
        }
      });
    });

    $(function () {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      <?php
      if ($this->session->flashdata('msg')) { ?>
        Toast.fire({
            type: 'error',
            title: 'Username atau Password salah'
          }); <?php
      } ?>
    });
  </script>
</body>

</html>