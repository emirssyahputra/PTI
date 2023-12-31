<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Selection</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <link rel="icon" type="image/png" href="<?= base_url('images/favicon.png'); ?>">
  <!-- CSS -->
  <link rel="stylesheet" href="<?= base_url('plugins/bootstrap/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome/css/all.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/animate-css/animate.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/slick/slick.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/slick/slick-theme.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/colorbox/colorbox.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">

</head>

<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">

    </div>

    <!-- Header start -->
    <header id="header" class="header-web">
      <div class="site-navigation">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">

                <div class="logo">
                  <a class="d-block" href="<?php echo site_url('pHome'); ?>">
                    <img loading="lazy" src="<?= base_url('images/logo.png'); ?>" alt="Loer Group">
                  </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav ml-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('pHome'); ?>">Home</a></li>

                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('pCareer'); ?>">Career</a></li>

                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Selection'); ?>">Selection</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('pAbout'); ?>">About</a></li>

                    <li class="header-get-a-quote">
                      <a class="btn btn-primary" href="<?php echo site_url('Login/logout'); ?>">LOG OUT</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--/ Header end -->

    <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Selection</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="ts-features" class="ts-features">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <p>Selamat datang di halaman seleksi <strong>#LoerGroup</strong>, di sini kami akan membagikan informasi terkait proses seleksi untuk bergabung dengan Loer Group.</p>
          </div>
        </div>
        <h2 class="column-title mrt-0">Proses Seleksi</h2>
        <div class="accordion accordion-group" id="our-values-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  PENDAFTARAN
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#our-values-accordion">
              <div class="card-body">
                <?php if ($Nama !== null): ?>
                  <p>Anda berhasil mendaftar sebagai
                    <strong><?= $Nama; ?></strong> pada tanggal
                    <strong><?= $waktu_apply; ?></strong>
                  </p>
                <?php else: ?>
                  <p>Anda belum mendaftar</p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  SELEKSI ADMINISTRASI
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
              <div class="card-body">
                <?php if ($status_adm === null): ?>
                  <p>Belum ada informasi</p>
                <?php elseif ($status_adm === '1'): ?>
                  <p>Anda dinyatakan <strong>Lolos Seleksi Administrasi</strong></p>
                <?php elseif ($status_adm === '2'): ?>
                  <p>Maaf, anda dinyatakan <strong>Tidak Lolos Seleksi Administrasi</strong></p>
                <?php endif; ?>
                <?php if ($komentar_adm): ?>
                  <p>
                    <?= $komentar_adm; ?>
                  </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  SELEKSI WAWANCARA
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
              <div class="card-body">
                <?php if ($status_wwc === null): ?>
                  <p>Belum ada informasi</p>
                <?php elseif ($status_wwc === '1'): ?>
                  <p>Anda dinyatakan <strong>Lolos Seleksi Wawancara</strong></p>
                <?php elseif ($status_wwc === '2'): ?>
                  <p>Maaf, anda dinyatakan <strong>Tidak Lolos Seleksi Wawancara</strong></p>
                <?php endif; ?>
                <?php if ($komentar_wwc): ?>
                  <p>
                    <?= $komentar_wwc; ?>
                  </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  SELEKSI UJI KEMAMPUAN
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#our-values-accordion">
              <div class="card-body">
                <?php if ($status_uji === null): ?>
                  <p>Belum ada informasi</p>
                <?php elseif ($status_uji === '1'): ?>
                  <p>Anda dinyatakan <strong>Lolos Seleksi Uji Kemampuan</strong></p>
                <?php elseif ($status_uji === '2'): ?>
                  <p>Maaf, anda dinyatakan <strong>Tidak Lolos Seleksi Uji Kemampuan</strong></p>
                <?php endif; ?>
                <?php if ($komentar_uji): ?>
                  <p>
                    <?= $komentar_uji; ?>
                  </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  PENGUMUMAN
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#our-values-accordion">
              <div class="card-body">
                <?php if ($status_akhir === null): ?>
                  <p>Belum ada informasi</p>
                <?php elseif ($status_akhir === '1'): ?>
                  <p>Anda dinyatakan <strong>Lolos Seleksi Penerimaan Pegawai Loer Group Pada Posisi
                    <?= $Nama; ?></strong>
                  </p>
                <?php elseif ($status_akhir === '2'): ?>
                  <p>Maaf, anda dinyatakan <strong>Tidak Lolos Seleksi Penerimaan Pegawai Loer Group Pada Posisi
                    <?= $Nama; ?></strong>
                  </p>
                <?php endif; ?>
                <?php if ($komentar_akhir): ?>
                  <p>
                    <?= $komentar_akhir; ?>
                  </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer" class="footer bg-overlay">
      <div class="footer-main">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 footer-widget footer-about">
              <h3 class="widget-title">About Us</h3>
              <a href="index.html">
                <img loading="lazy" class="footer-logo" src="images/footer-logo.png" alt="Constra">
              </a>
            </div>

            <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
              <h3 class="widget-title">Hubungi Kami</h3>
              <div class="working-hours">
                <p>Headquarter Office Jl. Brigjen Hasan Kasim, Ruko 30A Kecamatan Kalidoni, Kota Palembang Sumatera
                  Selatan 30114.</p>
                <p>Email: kopiloergroup@gmail.com</p>
                <p>Phone: +628 131 799 3414</p>
              </div>
              <div class="footer-social">
                <ul>
                  <li><a href="https://instagram.com/loergroup" aria-label="Instagram"><i
                        class="fab fa-instagram"></i></a></li>
                  <li><a href="https://id.linkedin.com/company/kopi-loer-group" aria-label="Linkedin"><i
                        class="fab fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-6 mt-5 mt-lg-0 footer-widget">
              <h3 class="widget-title">Brands</h3>
              <ul class="list-arrow">
                  <p>Kopi Loer</p>
                  <p>Rumah Loer</p>
                  <p>KORA Coffee</p>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="copyright-info text-center">
                <span>&copy;
                  <script>
                    document.write(new Date().getFullYear())
                  </script> PT. Loer Group Jaya. All rights reserved.
                </span>
              </div>
            </div>
          </div>

          <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Back to Top">
              <i class="fa fa-angle-double-up"></i>
            </button>
          </div>

        </div>
      </div>
    </footer>

    <!-- Javascript Files -->
    <script src="<?php echo base_url() . 'plugins/jQuery/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'plugins/bootstrap/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'plugins/slick/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'plugins/slick/slick-animation.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'plugins/colorbox/jquery.colorbox.js' ?>"></script>
    <script src="<?php echo base_url() . 'plugins/shuffle/shuffle.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'js/script.js' ?>"></script>
    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="<?= base_url('plugins/google-map/map.js'); ?>" defer></script>

  </div>
</body>

</html>