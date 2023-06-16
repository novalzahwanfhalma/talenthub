<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Talenthub Polibatam</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="author" content="Codeconvey" />

    <!-- Favicons -->
    <link href="{{ asset('style/assets/img/logothub.png') }}" rel="icon">
    <link href="{{ asset('style/assets/img/logothub.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('style/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css') }}"
        rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('style/assets/css/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/css/style1.css') }}" rel="stylesheet">
    css/demo.css
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
    @include('layouts/components/navbarind')
    <!-- End Header -->

    <main id="main">
        <section>
            <header class="ScriptHeader">
                <div class="rt-container">
                    <div class="col-rt-12">
                        <div class="rt-heading">
                            <h1 style="color: rgb(37, 37, 99);">Profil Perusahaan</h1>
                        </div>
                    </div>
                </div>
            </header>
            <div class="rt-container">
                <div class="col-rt-12">
                    <div class="Scriptcontent">

                        <!-- Student Profile -->
                        <div class="student-profile py-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 py-3">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent text-center">
                                                <img class="profile_img"
                                                    src="https://source.unsplash.com/600x300/?student" alt="student dp">
                                                <h3>{{ Auth::guard('industri')->user()->nama_industri }}
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0"><strong class="pr-1">Email:</strong>
                                                    awbisma0@gmail.com</p>
                                                <p class="mb-0"><strong class="pr-1">Kontak:</strong>
                                                    {{ Auth::guard('industri')->user()->contact }}</p>
                                                <p class="mb-0"><strong class="pr-1">Website:</strong> -</p>
                                                <div style="margin-top: 10px;">
                                                    <p>PT Asam Lambung adalah perusahaan yang membuat obat herbal untuk
                                                        mencegah terjadinya Asam Lambung</p>
                                                </div>
                                                <div class="social-icons"
                                                    style="display: flex; justify-content: center; align-items: center; margin-top: 10px;">
                                                    <a href="https://www.facebook.com/your-page" target="_blank"
                                                        style="margin-right: 10px;"><i class="fab fa-facebook"
                                                            style="font-size: 24px;"></i></a>
                                                    <a href="https://www.instagram.com/your-account" target="_blank"
                                                        style="margin-right: 10px;"><i class="fab fa-instagram"
                                                            style="font-size: 24px;"></i></a>
                                                    <a href="https://www.twitter.com/your-account" target="_blank"><i
                                                            class="fab fa-twitter" style="font-size: 24px;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-8 mt-3">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-transparent border-0">
                                                <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General
                                                    Information
                                                </h3>
                                            </div>
                                            <div class="card-body pt-0">
                                                <table class="table table-bordered">
                                                    <tr>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Nama Perusahaan</th>
                                                        <td width="2%">:</td>
                                                        <td>{{ Auth::guard('industri')->user()->nama_industri }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Tipe Perusahaan</th>
                                                        <td width="2%">:</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Sektor Usaha</th>
                                                        <td width="2%">:</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Jumlah Pegawai</th>
                                                        <td width="2%">:</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Provinsi</th>
                                                        <td width="2%">:</td>
                                                        <td>Kepulauan Riau</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Kota / Kabupaten</th>
                                                        <td width="2%">:</td>
                                                        <td>Batam</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Email</th>
                                                        <td width="2%">:</td>
                                                        <td>trplindustri@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Nomor Telepon</th>
                                                        <td width="2%">:</td>
                                                        <td>{{ Auth::guard('industri')->user()->contact }}
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div style="height: 26px"></div>
                                    </div>
                                    <td>
                                        <form class="text-end">
                                            <button type="submit" class="btn btn-sm btn-warning mr-1"><a
                                                    href="/profilind" style="color: #fff">Kelola
                                                    Profil</a></button>
                                            <button type="submit" class="btn btn-sm btn-primary mr-1"><a
                                                    href="/lowongan" style="color: #fff">Simpan</a></button>
                                        </form>
                                    </td>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- partial -->

            </div>
            </div>
            </div>
        </section>

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

    <!-- Template Main JS File -->
    <script src="{{ asset('style/assets/js/main.js') }}"></script>

</body>

</html>
