<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edit Kontrak Kerja</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/feather/feather.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/ti-icons/css/themify-icons.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/css/vendor.bundle.base.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/mdi/css/materialdesignicons.min.css'); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('css/stylea.css'); ?>">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('images/logo aku-nobg-notext.png'); ?>">
  <!-- <link rel="shortcut icon" href="../../images/logo-mini.svg" /> -->
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Back To Top</button>
  <script>
    // fungsi ketika user men scroll ke bawah 40 px maka tombol back to top akan muncul
    window.onscroll = function () { scrollFunction() };
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
        <a class="navbar-brand brand-logo mr-5" href="<?php echo site_url('Pengguna'); ?>"><img
            src="<?= base_url('images/logo aku-nobg-tex.png'); ?>" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo site_url('Pengguna'); ?>"><img
            src="<?= base_url('images/logo aku-nobg-notext.png'); ?>" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fa fa-navicon"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a href="<?php echo site_url('Login/logout'); ?>" class="dropdown-item"
              onclick="return confirm('Yakin ingin logout?')">
              <i class="fa fa-power-off text-primary"></i>Logout
            </a>
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type a="button"
          data-toggle="offcanvas">
          <span class="fa fa-navicon"></span>
        </button>
      </div>
    </nav>

    <!-- PANEL MENU KIRI [START] -->
    <div class="container-fluid page-body-wrapper">
      <!--  partial:partials/_sidebar.html  -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('Dashboard'); ?>">
              <iconify-icon icon="heroicons:window" class="menu-icon"></iconify-icon>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Job'); ?>">
              <iconify-icon icon="heroicons:list-bullet"
                style="font-size: 18px; border: 2px solid; border-radius: 5px; padding: 0.5px;"
                class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Lowongan</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <iconify-icon icon="fluent:people-team-24-filled" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Pendaftar</span>
              <iconify-icon icon="heroicons:chevron-right-20-solid" class="menu-icon" style="margin-left: 20px"></iconify-icon>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Pendaftar');?>">Kelola Data</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('KontrakKerja');?>">Kontrak Kerja</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Pengguna'); ?>">
              <iconify-icon icon="fluent:people-edit-24-filled" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Admin</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Outlet'); ?>">
              <iconify-icon icon="fa-solid:store" style="font-size: 20px;" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Outlet</span>
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
                  <h4 class="card-title">Edit Kontrak Kerja</h4>
                  <form class="forms-sample" method="POST" action="<?= site_url('UbahJob/updateJob'); ?>">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nomor">Nomor</label>
                            <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sr_hrd_klj">SR/HRD-KLJ</label>
                            <input type="text" class="form-control" id="sr_hrd_klj" name="sr_hrd_klj" placeholder="SR/HRD-KLJ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="divisi">Divisi</label>
                        <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi">
                    </div>
                    <div class="form-group">
                        <label for="masa">Masa Kontrak Pekerjaan</label>
                        <input type="text" class="form-control" id="masa" name="masa" placeholder="ex : masa percobaan (probation)">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dari">Dari Tanggal</label>
                            <input type="date" class="form-control" id="dari" name="dari">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="sampai">Sampai Tanggal</label>
                            <input type="date" class="form-control" id="sampai" name="sampai">
                        </div>
                    </div>
                    <p>Gaji</p>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="kompensasi">Kompensasi</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="number" class="form-control" id="kompensasi" name="kompensasi" placeholder="Kompensasi" pattern="\d*" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tunjangan_transport_meal">Tunjangan Transport & Meal</label>
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="number" class="form-control" id="tunjangan_transport_meal" name="tunjangan_transport_meal" placeholder="Tunjangan Transport & Meal" pattern="\d*" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-warning btn-icon-text">Simpan</button>
                    <a class="btn btn-danger btn-icon-text" href="<?= site_url('KontrakKerja'); ?>">Batal</a>
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
              &copy;
              <script> document.write(new Date().getFullYear()) </script> PT. Loer Group Jaya. All rights reserved.
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
  <script src="<?php echo base_url() . 'vendors/js/vendor.bundle.base.js' ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url() . 'js/jsa/off-canvas.js' ?>"></script>
  <script src="<?php echo base_url() . 'js/jsa/hoverable-collapse.js' ?>"></script>
  <script src="<?php echo base_url() . 'js/jsa/template.js' ?>"></script>
  <script src="<?php echo base_url() . 'js/jsa/settings.js' ?>"></script>
  <script src="<?php echo base_url() . 'js/jsa/todolist.js' ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>