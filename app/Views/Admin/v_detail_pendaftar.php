<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Detail Pendaftar</title>
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
          <div class="row-cols">

            <div class="col-xl-13 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Detail Pendaftar</h4>

                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Nama"
                        value="<?= $pendaftar['nama'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="minat">Minat</label>
                      <input type="text" class="form-control" id="minat" placeholder="Minat"
                        value="<?= $pendaftar['nama_job'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="periode">Periode Pendaftaran</label>
                      <input type="text" class="form-control" id="periode" placeholder="Periode Pendaftaran"
                        value="<?= date('d F Y', strtotime($pendaftar['waktu_mulai'])) ?> - <?= date('d F Y', strtotime($pendaftar['waktu_akhir'])) ?>"
                        readonly>
                    </div>
                    <div class="form-group">
                      <label for="tgl_daftar">Tanggal Daftar</label>
                      <input type="text" class="form-control" id="tgl_daftar" placeholder="Tanggal daftar"
                        value="<?= date('d F Y', strtotime($pendaftar['waktu_apply'])) ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                      <input type="text" class="form-control" id="jenis_kelamin" placeholder="Jenis kelamin"
                        value="<?= $pendaftar['jenkel'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="periode">Tempat, Tanggal Lahir</label>
                      <input type="text" class="form-control" id="periode" placeholder="Periode Pendaftaran"
                        value="<?= $pendaftar['tempat_lahir'] ?>, <?= date('d F Y', strtotime($pendaftar['tanggal_lahir'])) ?>"
                        readonly>
                    </div>
                    <div class="form-group">
                      <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                      <input type="text" class="form-control" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir"
                        value="<?= $pendaftar['pend'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Email"
                        value="<?= $pendaftar['email'] ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="telepon">No HP (Whatsapp)</label>
                      <input type="tel" class="form-control" id="telepon" placeholder="Telepon"
                        value="<?= $pendaftar['no_telp'] ?>" readonly>
                    </div>
                    <?php if (!empty($pendaftar['no_hp'])): ?>
                      <div class="form-group">
                        <label for="telepon">No HP (Opsional)</label>
                        <input type="tel" class="form-control" id="telepon" placeholder="Telepon"
                          value="<?= $pendaftar['no_hp'] ?>" readonly>
                      </div>
                    <?php endif ?>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" id="alamat" rows="1" placeholder="Alamat"
                        readonly><?= $pendaftar['alamat'] ?></textarea>
                    </div>
                    <?php if (!empty($pendaftar['linkedin'])): ?>
                      <div class="form-group">
                        <label for="link_linkedin">Link LinkedIn</label>
                        <input type="text" class="form-control" id="link_linkedin" placeholder="Link LinkedIn"
                          value="<?= $pendaftar['linkedin'] ?>" readonly>
                      </div>
                    <?php endif ?>
                    <!-- FUNGSI TOMBOL -->
                    <a class="btn btn-danger mr-2 mt-2 btn-sm custom-btn"
                      href="<?php echo site_url('Pendaftar'); ?>">Batal</a> | &nbsp;
                    <a class="btn btn-warning mr-2 mt-2 btn-sm custom-btn"
                      href="<?= site_url('DetailPendaftar/downloadFile/' . $pendaftar['ktp']) ?>" target="_blank"> KTP
                    </a>
                    <a class="btn btn-warning mr-2 mt-2 btn-sm custom-btn"
                      href="<?= base_url('DetailPendaftar/downloadFile/' . $pendaftar['cv']) ?>" target="_blank"> CV
                    </a>
                    <a class="btn btn-warning mr-2 mt-2 btn-sm custom-btn"
                      href="<?= base_url('DetailPendaftar/downloadFile/' . $pendaftar['surat_lamaran']) ?>"
                      target="_blank"> Surat Lamaran </a>
                    <a class="btn btn-warning mr-2 mt-2 btn-sm custom-btn"
                      href="<?= base_url('DetailPendaftar/downloadFile/' . $pendaftar['ijazah']) ?>" target="_blank">
                      Ijazah </a>
                    <?php if (!empty($pendaftar['skck'])): ?>
                      <a class="btn btn-warning mr-2 mt-2 btn-sm custom-btn"
                        href="<?= base_url('DetailPendaftar/downloadFile/' . $pendaftar['skck']) ?>" target="_blank"> SKCK
                      </a>
                    <?php endif ?>
                    <?php if (!empty($pendaftar['packlaring'])): ?>
                      <a class="btn btn-warning mr-2 mt-2 btn-sm custom-btn"
                        href="<?= base_url('DetailPendaftar/downloadFile/' . $pendaftar['packlaring']) ?>"
                        target="_blank"> Packlaring </a>
                    <?php endif ?>
                    <?php if (!empty($pendaftar['sertifikat_kompetensi'])): ?>
                      <a class="btn btn-warning mr-2 mt-2 btn-sm custom-btn"
                        href="<?= base_url('DetailPendaftar/downloadFile/' . $pendaftar['sertifikat_kompetensi']) ?>"
                        target="_blank"> Sertifikat Kompetensi </a>
                    <?php endif ?>
                    <?php if (!empty($pendaftar['berkas_pendukung'])): ?>
                      <a class="btn btn-warning mr-2 mt-2 btn-sm custom-btn"
                        href="<?= base_url('DetailPendaftar/downloadFile/' . $pendaftar['berkas_pendukung']) ?>"
                        target="_blank"> Berkas Pendukung Lainnya </a>
                    <?php endif ?>
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