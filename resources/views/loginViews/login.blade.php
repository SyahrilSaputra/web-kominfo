<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('')}}assets/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('')}}assets/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('')}}assets/admin/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('')}}assets/admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="{{ asset('')}}assets/admin/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="{{ asset('')}}assets/admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('')}}assets/admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('')}}assets/admin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <center>
                <h4>Selamat Datang Di Website Kominfo Kabupaten Bone</h4>
                <h6 class="fw-light">Silahkan Login Untuk Masuk</h6>
              </center>
              <form class="pt-3" method="GET" action="{{ url('/') }}">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <center>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Masuk</button>
                  </div>
                </center>
                {{-- <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>Connect using facebook
                  </button>
                </div> --}}
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('')}}assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('')}}assets/admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('')}}assets/admin/js/off-canvas.js"></script>
  <script src="{{ asset('')}}assets/admin/js/hoverable-collapse.js"></script>
  <script src="{{ asset('')}}assets/admin/js/template.js"></script>
  <script src="{{ asset('')}}assets/admin/js/settings.js"></script>
  <script src="{{ asset('')}}assets/admin/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
