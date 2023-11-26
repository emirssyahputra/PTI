<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kelola Pendaftar</title>
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
                  <h4 class="card-title nav-item" id="teksDouble">DATA PENDAFTAR</h4>
                  <form action="<?= site_url('Pendaftar'); ?>" method="post">
                    <div class="input-group">
                      <div class="input-group-prepend" id="navbar-search-icon">
                        <span class="input-group-text" id="search">
                          <i class="icon-search"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Cari Pendaftar" name="pencarian">
                    </div>
                  </form>
                  <div class="table-responsive">
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-hover">    
                            <thead>
                                <tr>
                                    <th>ID Pendaftar <i class="fa fa-sort" onclick="sortTable(0)"></i></th>
                                    <th>Nama Pendaftar <i class="fa fa-sort" onclick="sortTable(1)"></i></th>
                                    <th>Minat Pendaftar <i class="fa fa-sort" onclick="sortTable(2)"></i></th>
                                    <th>Periode Pendaftaran <i class="fa fa-sort" onclick="sortTable(3)"></i></th>
                                    <th>Status <i class="fa fa-sort" onclick="sortTable(4)"></i></th>
                                    <th>Kontrak Kerja <i class="fa fa-sort" onclick="sortTable(5)"></i></th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>P001</td>
                                    <td>John Doe</td>
                                    <td>Software Developer</td>
                                    <td class="text-danger">01 Juni 2023 - 30 Juni 2023</td>
                                    <td align="center"><label class="btn btn-process btn-icon-text menu-icon">Process</label></td>
                                    <td>
                                        <a href="<?php echo site_url('Cetak'); ?>" type="button" title="Ubah Data" class="btn btn-info btn-rounded btn-fw float-left">
                                            <i class="ti-printer btn-icon-prepend" style="padding-right: 10px;"></i>Cetak
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php echo site_url('DetailPendaftar'); ?>" type="button" title="Ubah Data" class="btn btn-statuss btn-icon-text">
                                            <iconify-icon icon="carbon:order-details" class="menu-icon" style="padding-right: 10px;"></iconify-icon>Detail
                                        </a> &nbsp;
                                        <a href="<?php echo site_url('UbahStatusPendaftar'); ?>" type="button" title="Ubah Data" class="btn btn-warning btn-icon-text">
                                            <iconify-icon icon="icon-park-outline:full-selection" class="menu-icon" style="padding-right: 10px;"></iconify-icon>Update
                                        </a> &nbsp;
                                        <a href="#" type="button" title="Hapus Data" class="btn btn-danger btn-icon-text" id="openDeletePopup1">
                                            <i class="fa fa-trash btn-icon-prepend"></i> Hapus
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>P002</td>
                                    <td>Jane Doe</td>
                                    <td>Graphic Designer</td>
                                    <td class="text-danger">01 Juli 2023 - 30 Agustus 2023</td>
                                    <td align="center"><label class="btn btn-pending btn-icon-text menu-icon">Pending</label></td>
                                    <td>
                                        <a href="#" type="button" title="Ubah Data" class="btn btn-danger btn-icon-text">Belum Ada</a>
                                    </td>
                                    <td>
                                        <a href="#" type="button" title="Ubah Data" class="btn btn-statuss btn-icon-text">
                                            <iconify-icon icon="carbon:order-details" class="menu-icon" style="padding-right: 10px;"></iconify-icon>Detail
                                        </a> &nbsp;
                                        <a href="#" type="button" title="Ubah Data" class="btn btn-warning btn-icon-text">
                                            <iconify-icon icon="icon-park-outline:full-selection" class="menu-icon" style="padding-right: 10px;"></iconify-icon>Update
                                        </a> &nbsp;
                                        <a href="#" type="button" title="Hapus Data" class="btn btn-danger btn-icon-text" id="openDeletePopup2">
                                            <i class="fa fa-trash btn-icon-prepend"></i> Hapus
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>P003</td>
                                    <td>Jake Doe</td>
                                    <td>Graphic Designer</td>
                                    <td class="text-danger">01 Agustus 2023 - 30 September 2023</td>
                                    <td align="center"><label class="btn btn-complete btn-icon-text menu-icon">Complete</label></td>
                                    <td>
                                        <a href="#" type="button" title="Ubah Data" class="btn btn-danger btn-icon-text">Belum Ada</a>
                                    </td>
                                    <td>
                                        <a href="#" type="button" title="Ubah Data" class="btn btn-statuss btn-icon-text">
                                            <iconify-icon icon="carbon:order-details" class="menu-icon" style="padding-right: 10px;"></iconify-icon>Detail
                                        </a> &nbsp;
                                        <a href="#" type="button" title="Ubah Data" class="btn btn-warning btn-icon-text">
                                            <iconify-icon icon="icon-park-outline:full-selection" class="menu-icon" style="padding-right: 10px;"></iconify-icon>Update
                                        </a> &nbsp;
                                        <a href="#" type="button" title="Hapus Data" class="btn btn-danger btn-icon-text" id="openDeletePopup3">
                                            <i class="fa fa-trash btn-icon-prepend"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

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
        <!-- Pop-up konfirmasi -->
        <div class="popup" id="deletePopup">
          <div class="popup-content">
            <div class="popup-header">
              <span class="popup-close" id="closeDeletePopup">
                <iconify-icon icon="heroicons:x-mark-solid"></iconify-icon>
              </span>
            </div>
            <div class="popup-body">
              <p>Apakah Anda yakin ingin menghapus pendaftar?</p>
            </div>
            <div class="popup-footer">
              <button class="btn btn-accept" id="confirmDelete">Ya</button>
              <button class="btn btn-danger" id="cancelDelete">Tidak</button>
            </div>
          </div>
        </div>
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
  <script src="<?php echo base_url() . 'js/jsa/sort.js' ?>"></script>
  <script src="<?php echo base_url() . 'js/jsa/popout.js' ?>"></script>
  <script>
    // Fungsi untuk menampilkan pop-up konfirmasi
    function showDeleteConfirmation(id) {
      document.getElementById("confirmDelete").setAttribute("data-id", id);
      document.getElementById("deletePopup").style.display = "block";
    }

    // Event listener untuk tombol "Hapus"
    const deleteButtons = document.querySelectorAll(".btn.btn-danger");
    deleteButtons.forEach((button) => {
      button.addEventListener("click", function (e) {
        e.preventDefault(); // Untuk mencegah tindakan default pada tautan
        const id = this.getAttribute("data-id");
        showDeleteConfirmation(id);
      });
    });

    // Event listener untuk tombol "Ya" pada pop-up konfirmasi
    document.getElementById("confirmDelete").addEventListener("click", function () {
      const id_form = this.getAttribute("data-id");
      window.location.href = "<?= site_url('Pendaftar/hapus/'); ?>" + id_form;
    });


    // Event listener untuk tombol "Tidak" pada pop-up konfirmasi
    document.getElementById("cancelDelete").addEventListener("click", function () {
      document.getElementById("deletePopup").style.display = "none";
    });

    // Event listener untuk tombol "Tutup" pada pop-up konfirmasi
    document.getElementById("closeDeletePopup").addEventListener("click", function () {
      document.getElementById("deletePopup").style.display = "none";
    });
  </script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>