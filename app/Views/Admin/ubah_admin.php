<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ubah Data Pengguna</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css"> <!-- INI WAJIB BUAT BISA MAKE ICON -->
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/logo aku-nobg-notext.png" />
  <!-- <link rel="shortcut icon" href="../../images/logo-mini.svg" /> -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Back To Top</button>
  <script>
  // fungsi ketika user men scroll ke bawah 40 px maka tombol back to top akan muncul
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
      } else {
          document.getElementById("myBtn").style.display = "none";
      }
  }
  // fungsi ketika user meng klik tombol back to top maka halaman akan menscroll ke atas
  function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
  }
  </script>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="../../index.html"><img src="../../images/logo aku-nobg-tex.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo aku-nobg-notext.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="fa fa-navicon"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a href="#" class="dropdown-item" onclick="return confirm('Yakin ingin logout?')">
                <i class="fa fa-power-off text-primary"></i>Logout
            </a>
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type a="button" data-toggle="offcanvas">
          <span class="fa fa-navicon"></span>
        </button>
      </div>
    </nav>

    <!-- PANEL MENU KIRI [START] -->
    <div class="container-fluid page-body-wrapper">
      <!--  partial:partials/_sidebar.html  --> 
      <nav class="sidebar sidebar-offcanvas" id="sidebar" >
        <ul class="nav">
    
          <li class="nav-item ">
            <a class="nav-link" href="../../index.html">
              <iconify-icon icon="heroicons:window" class="menu-icon"></iconify-icon>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <iconify-icon icon="heroicons:list-bullet" style="font-size: 18px; border: 2px solid; border-radius: 5px; padding: 0.5px;" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Lowongan</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <iconify-icon icon="fluent:people-team-24-filled" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Pendaftar</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="admin.html">
              <iconify-icon icon="fluent:people-edit-24-filled" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Pengguna</span>
            </a>
          </li>
          
        </ul>
      </nav>
    <!-- PANEL MENU KIRI [END] -->

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
                       
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Ubah Data Pengguna</h4>
                  
                  <form class="forms-sample" method="POST" action="#">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="nama" placeholder="Nama" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername2">Jabatan</label>
                      <input type="text" class="form-control" id="exampleInputUsername2" name="jabatan" placeholder="Jabatan" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Password" required />
                    </div>                    

                    <button type="submit" class="btn btn-warning btn-icon-text">Simpan</button>
                    <a class="btn btn-danger btn-icon-text" href="admin.html">Batal</a>
                  </form>

                </div>
              </div>
            </div>
            
            
          
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-flex justify-content-center">
            <span class="text-muted text-center">
              &copy; <script> document.write(new Date().getFullYear()) </script> PT. Loer Group Jaya. All rights reserved.
            </span>
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
