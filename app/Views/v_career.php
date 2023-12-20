<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Lowongan Pekerjaan</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="<?= base_url('images/favicon.png'); ?>">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url('plugins/bootstrap/bootstrap.min.css'); ?>">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome/css/all.min.css'); ?>">
  <!-- Animation -->
  <link rel="stylesheet" href="<?= base_url('plugins/animate-css/animate.css'); ?>">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="<?= base_url('plugins/slick/slick.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/slick/slick-theme.css'); ?>">
  <!-- Colorbox -->
  <link rel="stylesheet" href="<?= base_url('plugins/colorbox/colorbox.css'); ?>">
  <!-- Template styles-->
  <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.accordion-button').click(function () {
        var thisButton = $(this);
        var targetCollapse = $(this).attr('data-bs-target');

        $('.accordion-button').not(thisButton).addClass('collapsed');
        $('.collapse').not(targetCollapse).removeClass('show');

        thisButton.toggleClass('collapsed');
        $(targetCollapse).toggleClass('show');
      });
    });
  </script>

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
                  <a class="d-block" href="<?php echo site_url('/'); ?>">
                    <img loading="lazy" src="<?= base_url('images/logo.png'); ?>" alt="Loer Group">
                  </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                  aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav ml-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/'); ?>">Home</a></li>

                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Career'); ?>">Career</a></li>

                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('About'); ?>">About</a></li>

                    <li class="header-get-a-quote">
                      <a class="btn btn-primary" href="<?php echo site_url('Login'); ?>">LOGIN</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->
        </div>
        <!--/ Container end -->

      </div>
      <!--/ Navigation end -->
    </header>
    <!--/ Header end -->

    <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
      <div class="banner-text">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Career</h1>
              </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Banner text end -->
    </div><!-- Banner area end -->

<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <p>Bergabunglah menjadi bagian dari #TimLoer! Tumbuh dan berkembang bersama Loer Group dan temukan
          passion-mu dalam cakupan dunia jasa dan pelayanan</p>
      </div>
    </div>
    <h2 class="column-title mrt-0">Lowongan Tersedia</h2>

    <div class="accordion accordion-group" id="job-accordion">
      <?php foreach ($loker as $index => $job): ?>
        <div class="card">
          <div class="card-header p-0 bg-transparent" id="job-heading<?= $index ?>">
            <h2 class="mb-0">
              <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                data-target="#job-collapse<?= $index ?>" aria-expanded="false" aria-controls="job-collapse<?= $index ?>">
                <?= $job['Nama']; ?>
              </button>
            </h2>
          </div>
          <div id="job-collapse<?= $index ?>" class="collapse" aria-labelledby="job-heading<?= $index ?>"
            data-parent="#job-accordion">
            <div class="card-body">
              <h2 class="section-title"><strong>Kualifikasi</strong></h2>
              <p><?= nl2br($job['kualifikasi']); ?></p>
              <h2 class="section-title"><strong>Job Desk</strong></h2>
              <p><?= nl2br($job['jobdesk']); ?></p>
              <h2 class="section-title"><strong>Periode Waktu</strong></h2>
                  <p>
                    <?= date('j F Y', strtotime($job['waktu_mulai'])) . ' - ' . date('j F Y', strtotime($job['waktu_akhir'])); ?>
                  </p>
            </div>
            <div class="header-get-a-quote text-center my-2">
              <form method="post" action="<?php echo site_url('Apply'); ?>">
                <input type="hidden" name="id_loker" value="<?php echo $job['id_loker']; ?>">
                <button class="btn btn-primary apply-button" type="submit">Apply Now</button>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!--/ Accordion end -->
  </div><!-- Col end -->
</section><!-- Feature area end -->

    <footer id="footer" class="footer bg-overlay">
      <div class="footer-main">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 footer-widget footer-about">
              <h3 class="widget-title">About Us</h3>
              <a href="index.html">
                <img loading="lazy" class="footer-logo" src="images/footer-logo.png" alt="Constra">
              </a>
            </div><!-- Col end -->

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
              </div><!-- Footer social end -->
            </div><!-- Col end -->

            <div class="col-lg-2 col-md-6 mt-5 mt-lg-0 footer-widget">
              <h3 class="widget-title">Brands</h3>
              <ul class="list-arrow">
                  <p>Kopi Loer</p>
                  <p>Rumah Loer</p>
                  <p>KORA Coffee</p>
              </ul>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Footer main end -->

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
          </div><!-- Row end -->

          <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Back to Top">
              <i class="fa fa-angle-double-up"></i>
            </button>
          </div>

        </div><!-- Container end -->
      </div><!-- Copyright end -->
    </footer><!-- Footer end -->


    <!-- Javascript Files
  ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="<?php echo base_url() . 'plugins/jQuery/jquery.min.js' ?>"></script>
    <!-- Bootstrap jQuery -->
    <script src="<?php echo base_url() . 'plugins/bootstrap/bootstrap.min.js' ?>"></script>
    <!-- Slick Carousel -->
    <script src="<?php echo base_url() . 'plugins/slick/slick.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'plugins/slick/slick-animation.min.js' ?>"></script>
    <!-- Color box -->
    <script src="<?php echo base_url() . 'plugins/colorbox/jquery.colorbox.js' ?>"></script>
    <!-- shuffle -->
    <script src="<?php echo base_url() . 'plugins/shuffle/shuffle.min.js' ?>"></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="<?= base_url('plugins/google-map/map.js'); ?>" defer></script>

    <!-- Template custom -->
    <script src="<?php echo base_url() . 'js/script.js' ?>"></script>

  </div><!-- Body inner end -->
</body>

</html>