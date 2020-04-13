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
              <h4 class="m-0 text-dark">News</h4>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <button class="btn btn-primary" onclick="$('#form-add').show();">Add News</button>
          </div>
          <div class="row" id="form-add">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">News</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <form id="from-news-add">
                    <input type="hidden" name="tanggal" id="tanggal" value="<?php echo date('Y-m-d'); ?>">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control" id="photo">
                    <label>Description</label>
                    <textarea class="textarea" name="description" id="description"></textarea>
                    <label>Level</label>
                    <select id="level" data-style="form-control" class="selectpicker form-control" title="" name="level"
                      style="width: 100%;" multiple="">
                      <option value="Murid" selected>Murid</option>
                      <option value="Guru">Guru</option>
                      <option value="Kepala Sekolah">Kepala Sekolah</option>
                    </select>
                </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-success float-right" onclick="save_news()" title="Submit"
                    id="submit_button">submit</button>
                  <button type="button" class="btn btn-danger " title="Cancel" id="cancel_button"
                    onclick="reset_form();">cancel</button>
                </div>
              </div>
              </form>
            </div>
          </div>
          <div class="row" id="show-data">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">News</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body table-responsive">
                  <table id="datatables" class="table table-hover table-bordered tab" style="width: 100%">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Tanggal</th>
                        <th>Level</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
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
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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
      $('#datatables').DataTable({
        "pagingType": "full",
        "scrollX": true,
        "scrollCollapse": true,
        "select": true,
        columns: [{data: "title"}, {data: "tanggal" }, { data: "level"}, { data: "action"}]
      });

      // show data
      var tableHTML = '';
      var obj = [];
      var obj2 = [];

      var tblMhs = firebase.database().ref().child('news');
      tblMhs.on("value", function (snap) {
        obj = [];
        $.each(snap.val(), function (index, element) {
          obj2 = {
            "key": element.key,
            "title": element.title,
            "photo": element.photo,
            "tanggal": element.tanggal,
            "description": element.description,
            "level": element.level,
            "action": '<button type="button" data-id="' + element.key + '" class="btn btn-success btn-sm" id="edit-users" data-toggle="modal" title="Edit User"><i class="fa fa-edit"></i></button> <button class="btn btn-danger btn-sm" id="btn-delete-users"  data-id="' + element.key + '" title="Delete User"><i class="fa fa-trash"></i></button>'
          };
          obj.push(obj2);
        });
        addTable(obj);
      });

      function addTable(data) {
        $('#datatables').DataTable().clear().draw();
        $('#datatables').DataTable().rows.add(data).draw();
        $('#datatables').addClass('table table-hover table-bordered');
      }

      $('#link-news').addClass('active');
      $('#form-add').hide();
      CKEDITOR.replace('description', {
        removePlugins: 'image'
      });
    })

    function logout() {
      firebase.auth().signOut().then(function () {
        location.href = 'index.php';
      }).catch(function (error) {

      });
    }

    function reset_form() {
      CKEDITOR.instances.description.setData('');
      $('#form-add').hide();
      $('#from-news-add').trigger('reset');
      $('#level').selectpicker('refresh');
      $('#level').selectpicker();
    }
  </script>
  <script>
    function save_news() {
      Swal.showLoading();
      var title = $('#title').val();
      var photo = $('#photo').val();
      var description = CKEDITOR.instances['description'].getData();
      var level = $('#level').val();
      var key = Math.floor(Math.random() * 10000000001);
      var tanggal = $('#tanggal').val();
      // var metadata = {
      //   contentType: 'image/jpeg',
      // };
      var file = $('#photo').get(0).files[0];
      // var name = file.name;
      // var ref = firebase.storage().ref(name);
      // var task = ref.put(file, metadata);
      // var link_image=task.snapshot.downloadURL;
      if (title != "" && photo != "" && description != "" && level != "") {

        var Storages=firebase.storage().ref('news/'+file.name);
        Storages.put(file).then(function (result) {
          Storages.getDownloadURL().then(function (result) {
            database.ref('news/'+key).set({
              key:key,
              title:title,
              photo:file.name,
              link_photo:result,
              description:description,
              tanggal:tanggal,
              level:level
            });
          });
        });
        // task.snapshot.ref.getDownloadURL().then(function (downloadURL) {
        //   database.ref('news/' + key).set({
        //     key: key,
        //     title: title,
        //     photo: downloadURL,
        //     description: description,
        //     tanggal: tanggal,
        //     level: level
  
        //   }).catch((error) => {
        //     Swal.fire('error', error.code, 'error');
        //   });
        // });
        Swal.close();
        reset_form();
      } else {
        Swal.close();
        Swal.fire('Warning', 'Form must Filled', 'warning');
      }
    }
    $(document).on("click","#btn-delete-users",function (event) {
      var keys = $(this).attr('data-id');
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          database.ref('news/' + keys).once("value").then(function (snapshot) {
            var storageRef = firebase.storage().ref();
            var desertRef = storageRef.child('news/'+snapshot.val().photo);
            desertRef.delete().then(function() {
              console.log('image deleted');
            }).catch(function(error) {
              console.log(error.code);
            });
          })
          firebase.database().ref('news/' + keys).remove()
          .then(function() {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
              )
          }).catch(function(err) {
            var errM = err.messaging;
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: errM
            })
          })
        }
      })
      
    })
  </script>
</body>

</html>
