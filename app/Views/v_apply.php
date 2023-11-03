<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Apply Career</title>

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

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav ml-auto align-items-center">
                                        <li class="nav-item"><a class="nav-link"
                                                href="<?php echo site_url('/'); ?>">Home</a></li>

                                        <li class="nav-item"><a class="nav-link"
                                                href="<?php echo site_url('Career'); ?>">Career</a></li>

                                        <li class="nav-item"><a class="nav-link"
                                                href="<?php echo site_url('About'); ?>">About</a></li>

                                        <li class="header-get-a-quote">
                                            <a class="btn btn-primary" href="login.html">LOGIN</a>
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
                                <h1 class="banner-title">Apply Career</h1>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->

        <section id="registration" class="registration">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="registration-form">
                            <form action="<?= site_url('apply/apply'); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_loker"
                                        value="<?php echo $id_loker; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" value="<?php echo $nama; ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="jenis-kelamin">Jenis Kelamin</label>
                                    <select class="form-control" id="jenis-kelamin" name="jenkel" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="pendidikan-terakhir">Pendidikan Terakhir</label>
                                    <select class="form-control" id="pendidikan-terakhir" name="pend" required>
                                        <option value="">Pilih Pendidikan Terakhir</option>
                                        <option value="SLTA Sederajat">SLTA Sederajat</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="<?php echo $email; ?>"
                                        readonly>
                                </div>

                                <div class="form-group">
                                    <label for="telepon">Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="telepon" name="no_telp" required>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="2"
                                        required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="linkedin">URL LinkedIn</label>
                                    <input type="url" class="form-control" id="linkedin" name="linkedin"
                                        value="https://" placeholder="mis: http://linkedin.com/in/username" required>
                                </div>

                                <div class="form-group">
                                    <label for="cv">KTP</label>
                                    <input type="file" class="form-control-file" id="ktp" name="ktp" accept=".pdf"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="cv">Upload Curriculum Vitae (CV)</label>
                                    <input type="file" class="form-control-file" id="cv" name="cv" accept=".pdf"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="surat-lamaran">Upload Surat Lamaran</label>
                                    <input type="file" class="form-control-file" id="surat-lamaran" name="surat_lamaran"
                                        accept=".pdf" required>
                                </div>

                                <div class="form-group">
                                    <label for="ijazah">Upload File Ijazah</label>
                                    <input type="file" class="form-control-file" id="ijazah" name="ijazah" accept=".pdf"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="ijazah">SKCK</label>
                                    <input type="file" class="form-control-file" id="skck" name="skck" accept=".pdf"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="ijazah">Packlaring</label>
                                    <input type="file" class="form-control-file" id="packlaring" name="packlaring"
                                        accept=".pdf" required>
                                </div>

                                <div class="form-group">
                                    <label for="sertifikat">Upload File Sertifikat Kompetensi (Opsional)</label>
                                    <input type="file" class="form-control-file" id="sertifikat"
                                        name="sertifikat_kompetensi" accept=".pdf">
                                </div>

                                <div class="form-group">
                                    <label for="berkas-pendukung">Upload Berkas Pendukung Lainnya (Opsional)</label>
                                    <input type="file" class="form-control-file" id="berkas-pendukung"
                                        name="berkas-pendukung" accept=".pdf">
                                </div>

                                <div class="header-get-a-quote text-center my-2">
                                    <button type="submit" class="btn btn-primary apply-button">Apply Now</button>
                                </div>

                            </form>
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
                        </div><!-- Col end -->

                        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                            <h3 class="widget-title">Hubungi Kami</h3>
                            <div class="working-hours">
                                <p>Headquarter Office Jl. Brigjen Hasan Kasim, Ruko 30A Kecamatan Kalidoni, Kota
                                    Palembang Sumatera Selatan 30114.</p>
                                <p>Email: kopiloergroup@gmail.com</p>
                                <p>Phone: +628 131 799 3414</p>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://instagram.com/loergroup" aria-label="Instagram"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://id.linkedin.com/company/kopi-loer-group"
                                            aria-label="Linkedin"><i class="fab fa-linkedin"></i></a></li>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"
            defer></script>
        <!-- Google Map Plugin-->
        <script src="<?= base_url('plugins/google-map/map.js'); ?>" defer></script>

        <!-- Template custom -->
        <script src="<?php echo base_url() . 'js/script.js' ?>"></script>


    </div><!-- Body inner end -->
</body>

</html>