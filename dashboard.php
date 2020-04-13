<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Go News</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/adminlte.css">
  <link rel="stylesheet" href="assets/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include('component/navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include('component/sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h4 class="m-0 text-dark">Dashboard</h4>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    </div>
    <!-- /.content-wrapper -->
    <section class="content">
      <div class="container-fluid">

      </div>
    </section>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/jquery-ui.js"></script>
  <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.bundle.min.js"></script>
  <script src="assets/js/adminlte.js"></script>
  <script src="assets/js/demo.js"></script>
  <!-- Additional JS -->
  <script src="assets/js/plugins/arrive.min.js"></script>
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <script src="assets/js/plugins/chartist.min.js"></script>
  <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
  <script src="assets/js/plugins/jquery.tagsinput.js"></script>
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <script src="assets/js/plugins/jquery.knob.min.js"></script>
  <script src="assets/js/plugins/dataTables.bootstrap4.js"></script>
  <script src="assets/js/plugins/jquery.overlayScrollbars.min.js"></script>
  <script src="assets/js/plugins/bootstrap-select.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-messaging.js"></script>
    <script src="assets/js/firebase_link.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <script>
    $(function () {
      $('#datatables').DataTable();
      $('#link-dashboard').addClass('active');
    })
    function logout(){
      firebase.auth().signOut().then(function() {
        location.href='index.php';
      }).catch(function(error) {

      });
    }
  </script>
</body>
</html>
