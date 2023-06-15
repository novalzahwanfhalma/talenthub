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
    @include('layouts/components/navbar')
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs1">
            <div class="container">
                <ol>
                    <li><a href="/cv1">Portofolio</a></li>
                    <li><a href="/cv2">Pendidikan</a></li>
                    <li><a href="/cv3">Pengalaman</a></li>
                    <li><a href="/cv4">Prestasi</a></li>
                    <li><a href="/cv5">Sertifikat</a></li>
                    <li><a href="/cv6">Bahasa</a></li>
                    <li>
                        <a href="/laporan">
                            <button onclick="cetakPDF()"
                                style="color: #fff; background-color: #2168c5; border: none; border-radius: 7px;">
                                <i class="bi bi-printer-fill"></i>
                                Cetak CV
                            </button>
                        </a>
                    </li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->
    </main>

    <main id="main">
        <section>
            <header class="ScriptHeader">
                <div class="rt-container">
                    <div class="col-rt-12">
                        <div class="rt-heading">
                            <h1 style="color: rgb(37, 37, 99);">Profil Mahasiswa</h1>
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
                                                <h3>{{ Auth::user()->nama_mhs }}</h3>
                                            </div>
                                            <div class="card-body">
                                                <p class="mb-0"><strong
                                                        class="pr-1">NIM:</strong>{{ Auth::user()->nim }}</p>
                                                <p class="mb-0"><strong class="pr-1">Program
                                                        Studi:</strong>Teknologi
                                                    Rekayasa Perangkat Lunak</p>
                                                <p class="mb-0"><strong
                                                        class="pr-1">Email:</strong>{{ Auth::user()->email }}
                                                </p>
                                                <p class="mb-0"><strong
                                                        class="pr-1">Kontak:</strong>{{ Auth::user()->no_hp }}
                                                </p>
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
                                                        <th width="30%">Nama</th>
                                                        <td width="2%">:</td>
                                                        <td>{{ Auth::user()->nama_mhs }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">NIM</th>
                                                        <td width="2%">:</td>
                                                        <td>{{ Auth::user()->nim }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Perguruan Tinggi</th>
                                                        <td width="2%">:</td>
                                                        <td>Politeknik Negeri Batam</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">IPK</th>
                                                        <td width="2%">:</td>
                                                        <td>Belum diketahui</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Program Studi</th>
                                                        <td width="2%">:</td>
                                                        <td>Teknologi Rekayasa Perangkat Lunak</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Jenjang</th>
                                                        <td width="2%">:</td>
                                                        <td>D4</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Status</th>
                                                        <td width="2%">:</td>
                                                        <td>Mahasiswa</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Jenis Kelamin</th>
                                                        <td width="2%">:</td>
                                                        <td>Laki-laki</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Alamat</th>
                                                        <td width="2%">:</td>
                                                        <td>{{ Auth::user()->alamat }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Email</th>
                                                        <td width="2%">:</td>
                                                        <td>{{ Auth::user()->email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th width="30%">Nomor Telepon</th>
                                                        <td width="2%">:</td>
                                                        <td>{{ Auth::user()->no_hp }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div style="height: 26px"></div>
                                    </div>
                                    <td>
                                        <form class="text-end">
                                            <button type="submit" class="btn btn-sm btn-warning mr-1"><a
                                                    href="/editprof" style="color: #fff">Kelola
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
