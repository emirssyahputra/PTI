<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Status Pendaftar</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/feather/feather.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/ti-icons/css/themify-icons.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/css/vendor.bundle.base.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/mdi/css/materialdesignicons.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('css/stylea.css'); ?>">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  <link rel="shortcut icon" href="<?= base_url('images/logo aku-nobg-notext.png'); ?>">
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
            <a class="nav-link" href="<?php echo site_url('Pendaftar'); ?>">
              <iconify-icon icon="fluent:people-team-24-filled" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Pendaftar</span>
            </a>
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

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Status Penerimaan</h4>

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
                  <?php if (empty($pendaftar['status_adm'])): ?>
                    <form class="forms-sample" method="POST"
                      action="<?= site_url('UbahStatusPendaftar/updateStatusAdm'); ?>">
                      <div class="form-group">
                        <label>Seleksi Administrasi</label>
                        <input type="hidden" name="id_form" value="<?= $pendaftar['id_form'] ?>">
                        <div>
                          <select name="status_adm" class="form-control" style="width: 880px;">
                            <option value="">Pending</option>
                            <option value="1">Lolos</option>
                            <option value="2">Tidak Lolos</option>
                          </select>
                        </div>
                        <label>Komentar Seleksi Administrasi</label>
                        <div class="form-group">
                          <textarea name="komentar_adm" class="form-control" id="comment" rows="7"></textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-warning btn-icon-text">Simpan</button>
                      <a class="btn btn-danger btn-icon-text" href="<?php echo site_url('Pendaftar'); ?>">Batal</a>
                    </form>
                  <?php elseif (!empty($pendaftar['status_adm'])): ?>
                    <div class="form-group">
                      <label>Seleksi Administrasi</label>
                      <input type="text" class="form-control" id="minat" placeholder="Minat"
                        value="<?= ($pendaftar['status_adm'] == 1) ? 'Lolos' : 'Tidak Lolos' ?>" readonly>
                    </div>
                  <?php endif; ?>

                  <?php if (empty($pendaftar['status_wwc']) && (!empty($pendaftar['status_adm']) && $pendaftar['status_adm'] !== "2")): ?>
                    <form class="forms-sample" method="POST"
                      action="<?= site_url('UbahStatusPendaftar/updateStatusWwc'); ?>">
                      <div class="form-group">
                        <label>Seleksi Wawancara</label>
                        <input type="hidden" name="id_form" value="<?= $pendaftar['id_form'] ?>">
                        <div>
                          <select name="status_wwc" class="form-control" style="width: 880px;">
                            <option value="">Pending</option>
                            <option value="1">Lolos</option>
                            <option value="2">Tidak Lolos</option>
                          </select>
                        </div>
                        <label>Komentar Seleksi Wawancara</label>
                        <div class="form-group">
                          <textarea name="komentar_wwc" class="form-control" id="comment" rows="7"></textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-warning btn-icon-text">Simpan</button>
                      <a class="btn btn-danger btn-icon-text" href="<?php echo site_url('Pendaftar'); ?>">Batal</a>
                    </form>
                  <?php elseif (!empty($pendaftar['status_wwc'])): ?>
                    <div class="form-group">
                      <label>Seleksi Wawancara</label>
                      <input type="text" class="form-control" id="minat" placeholder="Minat"
                        value="<?= ($pendaftar['status_wwc'] == 1) ? 'Lolos' : 'Tidak Lolos' ?>" readonly>
                    </div>
                  <?php endif; ?>

                  <?php if (empty($pendaftar['status_uji']) && (!empty($pendaftar['status_wwc']) && $pendaftar['status_wwc'] !== "2")): ?>
                    <form class="forms-sample" method="POST"
                      action="<?= site_url('UbahStatusPendaftar/updateStatusUji'); ?>">
                      <div class="form-group">
                        <label>Seleksi Uji Kemampuan</label>
                        <input type="hidden" name="id_form" value="<?= $pendaftar['id_form'] ?>">
                        <div>
                          <select name="status_uji" class="form-control" style="width: 880px;">
                            <option value="">Pending</option>
                            <option value="1">Lolos</option>
                            <option value="2">Tidak Lolos</option>
                          </select>
                        </div>
                        <label>Komentar Seleksi Uji Kemampuan</label>
                        <div class="form-group">
                          <textarea name="komentar_uji" class="form-control" id="comment" rows="7"></textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-warning btn-icon-text">Simpan</button>
                      <a class="btn btn-danger btn-icon-text" href="<?php echo site_url('Pendaftar'); ?>">Batal</a>
                    </form>
                  <?php elseif (!empty($pendaftar['status_uji'])): ?>
                    <div class="form-group">
                      <label>Seleksi Uji Kemampuan</label>
                      <input type="text" class="form-control" id="minat" placeholder="Minat"
                        value="<?= ($pendaftar['status_uji'] == 1) ? 'Lolos' : 'Tidak Lolos' ?>" readonly>
                    </div>
                  <?php endif; ?>

                  <?php if (empty($pendaftar['status_akhir']) && (!empty($pendaftar['status_uji']) && $pendaftar['status_uji'] !== "2")): ?>
                    <form class="forms-sample" method="POST"
                      action="<?= site_url('UbahStatusPendaftar/updateStatusAkhir'); ?>">
                      <div class="form-group">
                        <label>Seleksi Akhir</label>
                        <input type="hidden" name="id_form" value="<?= $pendaftar['id_form'] ?>">
                        <div>
                          <select name="status_akhir" class="form-control" style="width: 880px;">
                            <option value="">Pending</option>
                            <option value="1">Lolos</option>
                            <option value="2">Tidak Lolos</option>
                          </select>
                        </div>
                        <label>Komentar Seleksi Akhir</label>
                        <div class="form-group">
                          <textarea name="komentar_akhir" class="form-control" id="comment" rows="7"></textarea>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-warning btn-icon-text">Simpan</button>
                      <a class="btn btn-danger btn-icon-text" href="<?php echo site_url('Pendaftar'); ?>">Batal</a>
                    </form>
                  <?php elseif (!empty($pendaftar['status_akhir'])): ?>
                    <div class="form-group">
                      <label>Seleksi Akhir</label>
                      <input type="text" class="form-control" id="minat" placeholder="Minat"
                        value="<?= ($pendaftar['status_akhir'] == 1) ? 'Lolos' : 'Tidak Lolos' ?>" readonly>
                    </div>
                  <?php endif; ?>

                </div>
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="d-flex justify-content-center">
            <span class="text-muted text-center">
              &copy;
              <script> document.write(new Date().getFullYear()) </script> PT. Loer Group Jaya. All rights reserved.
            </span>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <!-- plugins:js -->
  <script src="<?php echo base_url() . 'vendors/js/vendor.bundle.base.js' ?>"></script>
  <script src="<?php echo base_url() . 'js/jsa/off-canvas.js' ?>"></script>
  <script src="<?php echo base_url() . 'js/jsa/hoverable-collapse.js' ?>"></script>
  <script src="<?php echo base_url() . 'js/jsa/template.js' ?>"></script>
  <script src="<?php echo base_url() . 'js/jsa/settings.js' ?>"></script>
  <script src="<?php echo base_url() . 'js/jsa/todolist.js' ?>"></script>
</body>

</html>