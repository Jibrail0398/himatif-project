<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>e-Certificate</b>UBP</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php 

        session_start();
        

      ?>
      

      <form action="./admin/pages/login/process-login.php" method="post">

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          
          <div class="col-12">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          
        </div>
      </form>

      

      
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./assets/dist/js/adminlte.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    function ErrorLogin(title,message){
      Swal.fire({
        icon: "error",
        title: title,
        text: message,
        confirmButtonColor: "#3085d6",
        confirmButtonText: "Coba Lagi",
        
        
      });
    }
    document.addEventListener("DOMContentLoaded",function(){
      <?php if($_SESSION["login_error"] == "password"): ?>
        ErrorLogin("Login Gagal","Password salah");
        
      <?php elseif($_SESSION["login_error"] == "username"): ?>
        ErrorLogin("Login Gagal","Username salah");
        
      <?php endif; ?>
        
      <?php 
        session_destroy();
        
      ?>
    });
  </script>
</body>
</html>
