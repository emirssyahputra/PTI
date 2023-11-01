<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>Loer Group</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url('plugins/bootstrap/bootstrap.min.css'); ?>">
   <!-- FontAwesome -->
   <link rel="stylesheet"href="<?= base_url('plugins/fontawesome/css/all.min.css'); ?>">
  <!-- Animation -->
  <link rel="stylesheet" href="<?= base_url('plugins/animate-css/animate.css'); ?>">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="<?= base_url('plugins/slick/slick.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/slick/slick-theme.css'); ?>">
  <!-- Colorbox -->
  <link rel="stylesheet" href="<?= base_url('plugins/colorbox/colorbox.css'); ?>">
  <!-- Template styles-->
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
                    <a class="d-block" href="<?php echo site_url('/');?>">
                      <img loading="lazy" src="<?= base_url('images/logo.png'); ?>" alt="Loer Group">
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto align-items-center">
                      <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/');?>">Home</a></li>
              
                      <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Career');?>">Career</a></li>
                                    
                      <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Selection');?>">Selection</a></li>

                      <li class="nav-item"><a class="nav-link" href="<?php echo site_url('About');?>">About</a></li>

                      <li class="header-get-a-quote">
                          <a class="btn btn-primary" href="<?php echo site_url('Login/logout');?>">LOG OUT</a>
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

<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url(images/slider-main/KOPI-LOER.jpg)">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h3 class="slide-sub-title" data-animation-in="slideInRight">Loer Group</h3>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(images/slider-main/KORA.jpg)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h3 class="slide-title" data-animation-in="fadeIn">Lorem Ipsum</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Loer Group</h3>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(images/slider-main/RUMAH-LOER.jpg)">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title" data-animation-in="slideInDown">Palembang</h2>
                <h3 class="slide-sub-title" data-animation-in="fadeIn">Loer Group</h3>
                <p class="slider-description lead" data-animation-in="slideInRight">Lorem Ipsum</p>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h3 class="section-sub-title">About Us</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5 mt-5 mt-lg-0">
        <div id="page-slider" class="page-slider small-bg">
    
          <div class="item" style="background-image:url(images/slider-pages/KOPI-LOER-TIM.jpg)">
            <div class="container">
              <div class="box-slider-content">
                <div class="box-slider-text">
                  <h2 class="box-slide-title">Kopi Loer</h2>
                </div>    
              </div>
            </div>
          </div><!-- Item 1 end -->
    
          <div class="item" style="background-image:url(images/slider-pages/KORA-TIM.jpg)">
            <div class="container">
              <div class="box-slider-content">
                <div class="box-slider-text">
                  <h2 class="box-slide-title">Kora</h2>
                </div>    
              </div>
            </div>
          </div><!-- Item 2 end -->
    
          <div class="item" style="background-image:url(images/slider-pages/RUMAH-LOER-TIM.jpg)">
            <div class="container">
              <div class="box-slider-content">
                <div class="box-slider-text">
                  <h2 class="box-slide-title">Rumah Loer</h2>
                </div>    
              </div>
            </div>
          </div><!-- Item 3 end -->
        </div><!-- Page slider end-->
      </div><!-- Col end -->
    
      <div class="col-lg-7">
        <p>𝑺𝑬𝑫𝑶𝑳𝑶𝑬𝑹 (P) - 𝑳𝑶𝑬𝑹 (S) - (/lur) sapaan hangat khas wong kito galo, berasal dari kata 'dulur' yang artinya saudara, sapaan dekat yang mencairkan suasana…</p>
        <p>Berangkat dari antusiasme dan rasa cinta akan dunia kuliner, Kopi Loer hadir di pertengahan tahun 2019 dengan konsep kedai kopi kekinian yang sederhana di tengah-tengah Kota Palembang.</p>
        <p>Satu tahun setelah Kopi Loer hadir ditengah semaraknya perkembangan dunia kuliner di Kota Palembang, Kopi Loer menerima pendanaan melalui Equity Crowd Funding (ECF) dan melakukan pengembangan dengan penambahan kedai-kedai Kopi Loer, diantaranya Kopi Loer Sudirman dan KL Celentang. Pada penghujung tahun 2021, Rumah Loer hadir dan menjadi resto dengan konsep satu-kesatuan seluruh kedai Kopi Loer yang ada, menyajikan pengalaman menikmati seduhan kopi dan hidangan makanan yang lebih berkesan.</p>
      </div><!-- Col end -->
    </div><!-- Content row end -->    

  </div><!-- Container end -->
</section><!-- Main container end -->

<section id="ts-features" class="ts-features">
  <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h3 class="section-sub-title">Carrer</h3>
          </div>
        </div>

        <div class="accordion accordion-group" id="our-values-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  BARISTA
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#our-values-accordion">
              <div class="card-body">
                <h2 class="section-title">Kualifikasi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
                <h2 class="section-title">Job Desk</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
              </div>
              <!-- Tombol "Apply Now" -->
              <div class="header-get-a-quote text-center my-2">
                <a class="btn btn-primary apply-button" href=#>Apply Now</a>
              </div>              
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  CASHIER
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
              <div class="card-body">
                <h2 class="section-title">Kualifikasi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
                <h2 class="section-title">Job Desk</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
              </div>
              <!-- Tombol "Apply Now" -->
              <div class="header-get-a-quote text-center my-2">
                <a class="btn btn-primary apply-button" href=#>Apply Now</a>
              </div>              
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  COOK & COOK HELPER
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
              <div class="card-body">
                <h2 class="section-title">Kualifikasi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
                <h2 class="section-title">Job Desk</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
              </div>
              <!-- Tombol "Apply Now" -->
              <div class="header-get-a-quote text-center my-2">
                <a class="btn btn-primary apply-button" href=#>Apply Now</a>
              </div>              
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  FINANCE
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#our-values-accordion">
              <div class="card-body">
                <h2 class="section-title">Kualifikasi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
                <h2 class="section-title">Job Desk</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
              </div>
              <!-- Tombol "Apply Now" -->
              <div class="header-get-a-quote text-center my-2">
                <a class="btn btn-primary apply-button" href=#>Apply Now</a>
              </div>              
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  ACCOUNTING
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#our-values-accordion">
              <div class="card-body">
                <h2 class="section-title">Kualifikasi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
                <h2 class="section-title">Job Desk</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
              </div>
              <!-- Tombol "Apply Now" -->
              <div class="header-get-a-quote text-center my-2">
                <a class="btn btn-primary apply-button" href=#>Apply Now</a>
              </div>              
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingSix">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  PURCHASING
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#our-values-accordion">
              <div class="card-body">
                <h2 class="section-title">Kualifikasi</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
                <h2 class="section-title">Job Desk</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque erat nec justo auctor viverra. Etiam tempor laoreet odio, eget convallis diam consectetur vel. Sed nec turpis laoreet mauris interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada id nulla vitae commodo. In sed eros ligula. Integer rutrum fermentum fringilla. Aenean eget nulla eget eros imperdiet consequat id hendrerit massa.</p>
              </div>
              <!-- Tombol "Apply Now" -->
              <div class="header-get-a-quote text-center my-2">
                <a class="btn btn-primary apply-button" href=#>Apply Now</a>
              </div>              
            </div>
          </div>
        </div>
        <!--/ Accordion end -->
      </div><!-- Col end -->
</section><!-- Feature area end -->


<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-4 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/brand.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="3">0</span></h2>
                <h3 class="ts-facts-title">BRANDS</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/outlet.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="5">0</span></h2>
                <h3 class="ts-facts-title">OUTLETS</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/produk.png" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="125">0</span></h2>
                <h3 class="ts-facts-title">PRODUCTS</h3>
              </div>
          </div><!-- Col end -->

        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->

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
              <p>Headquarter Office Jl. Brigjen Hasan Kasim, Ruko 30A Kecamatan Kalidoni, Kota Palembang Sumatera Selatan 30114.</p>
              <p>Email: kopiloergroup@gmail.com</p>
              <p>Phone: +628 131 799 3414</p>
            </div>
            <div class="footer-social">
              <ul>
                <li><a href="https://instagram.com/loergroup" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="https://id.linkedin.com/company/kopi-loer-group" aria-label="Linkedin"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div><!-- Footer social end -->
          </div><!-- Col end -->

          <div class="col-lg-2 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Brands</h3>
            <ul class="list-arrow">
              <p>Kopi Loer</p>
              <p>Kora</p>
              <p>Rumah Loer</p>
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
              <span>&copy; <script>
                  document.write(new Date().getFullYear())
                </script> PT. Loer Group Jaya. All rights reserved.</span>
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
  <script src="<?php echo base_url().'plugins/jQuery/jquery.min.js'?>"></script>
  <!-- Bootstrap jQuery -->
  <script src="<?php echo base_url().'plugins/bootstrap/bootstrap.min.js'?>"></script>
  <!-- Slick Carousel -->
  <script src="<?php echo base_url().'plugins/slick/slick.min.js'?>"></script>
  <script src="<?php echo base_url().'plugins/slick/slick-animation.min.js'?>"></script>
  <!-- Color box -->
  <script src="<?php echo base_url().'plugins/colorbox/jquery.colorbox.js'?>"></script>
  <!-- shuffle -->
  <script src="<?php echo base_url().'plugins/shuffle/shuffle.min.js'?>"></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="<?= base_url('plugins/google-map/map.js'); ?>" defer></script>

  <!-- Template custom -->
  <script src="<?php echo base_url().'js/script.js'?>"></script>

  </div><!-- Body inner end -->
  </body>

  </html>