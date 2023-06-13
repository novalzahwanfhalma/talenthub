<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Talenthub Polibatam</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('style/assets/img/logothub.png') }}" rel="icon">
    <link href="{{ asset('style/assets/img/logothub.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('style/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        .dropdown {
            padding-top: 20px;
        }

        .dropbtn {
            border-radius: 50px;
            padding: 10px 40px;
            background-color: #18aaf4;
            color: #ffffff
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 200px;
            padding: 10px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 10px;
        }

        .dropdown-content ul li a {
            display: block;
            padding: 10px 0px;
            text-decoration: none;
            color: #000;
        }

        .dropdown-content ul li a:hover {
            background-color: #f1f1f1;
            color: #2a0ab8;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>


    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts/components/navbarpage')
    <!-- End Header -->

    <!-- ======= Home Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Temukan tempat <span style="color: #1bbacf">KERJA</span> yang di inginkan
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Solusi para mahasiswa untuk mempublikasikan kemampuan
                        mereka dan membantu mereka untuk mendapatkan pekerjaan dengan lebih cepat sesuai dengan
                        keinginan mereka.</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-lg-start">
                            <div class="dropdown">
                                <button class="dropbtn">Masuk</button>
                                <div class="dropdown-content">
                                    <ul>
                                        <li><a href="/login">Login Mahasiswa</a></li>
                                        <li><a href="/loginind">Login Industri</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Home -->

    <!-- End Lowongan -->

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('style/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('style/assets/js/main.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>
