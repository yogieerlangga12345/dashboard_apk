<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Go News</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Go News</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Register</p>
        <form id="form-loginn" onsubmit="login();return false">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email" id="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" id="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col">
              <p><small><i>Sudah Punya Akses Sebagai Pembimbing?</i><a href="index.php">Sign In</a></small></p>
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            </div>
            <!-- /.col -->
          </div>
          <br>
        </form>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/plugins/sweetalert2.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/js/core/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/js/adminlte.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-messaging.js"></script>
    <script src="assets/js/firebase_link.js"></script>
   <script>
    function login() {
      Swal.fire({
        html: 'Loading . . .',
        allowOutsideClick:false,
        onBeforeOpen: function() {
          Swal.showLoading()
        }
      });
      var email = $('#email').val();
      var password = $('#password').val();
      if(email,password == ""){
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Form must Filled'
        });
      }else{
        firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
          Swal.close();
          var errorCode = error.code;
          var errorMessage = error.message;
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: errorMessage
          });
        });

        firebase.auth().onAuthStateChanged(function (user) {
         if (user) {
          window.location = "dashboard.php";

        } else {

        }
      });
      }

    }
  </script>

</body>
</html>
