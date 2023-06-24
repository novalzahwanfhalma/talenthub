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

    <!-- Template Main CSS File -->
    <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">

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
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Mahasiswa unggulan</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Front end merupakan salah satu bagian dari website yang menampilkan tampilan untuk para pengguna.
                                    Pada bagian ini dibuat dengan menggunakan 3 bahasa pemrograman web yaitu
                                    HyperText Markup Language (HTTP), Cascading Style Sheets (CSS), dan JavaScript.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('style/assets/img/noval.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Noval Zahwan Fhalma</h3>
                                    <h4>Front End Developer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Web designer atau perancang web adalah profesi yang dijalankan oleh orang-orang yang pekerjaannya membuat desain sebuah website.
                                    Desain tersebut nantinya bisa dibuka dan dinikmati pada sebuah layar monitor baik melalui komputer, handphone, ataupun tablet.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('style/assets/img/bisma.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Bisma Arya Whardhana</h3>
                                    <h4>Desainer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Back end merupakan bagian dari situs web yang tidak dilihat oleh pelanggan.
                                    Back end berurusan dengan data-data di balik layar,
                                    ia bertanggung jawab dalam menyimpan dan mengatur data,
                                    serta memastikan hal yang ada pada sisi klien berfungsi dan tidak bermasalah.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('style/assets/img/dilan.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Khoiry Lithfi Dilan</h3>
                                    <h4>Back End Developer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Full-stack developer adalah seorang ahli teknologi yang mampu memperbaiki front-end maupun back-end dari sebuah aplikasi.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('style/assets/img/fitri.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Fitriani</h3>
                                    <h4>Fullstack &amp; Primary Key</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    Analisis data adalah proses pengolahan data untuk tujuan menemukan informasi
                                    yang berguna yang dapat dijadikan sebagai dasar pengambilan keputusan untuk memecahkan suatu masalah.
                                    Proses analisis ini meliputi kegiatan pengelompokan data berdasarkan karakteristiknya, pembersihan data, transformasi data,
                                    pembuatan model data hingga mencari informasi penting dari data tersebut.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="{{ asset('style/assets/img/hanna.jpg') }}" class="testimonial-img"
                                        alt="">
                                    <h3>Hanna</h3>
                                    <h4>Analisis</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->



        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4">

                        <div class="sidebar">
                            <h4 class="sidebar-tit">Kata kunci</h4>
                            <form action="">
                                <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                                    <div class="input-group">
                                        <input type="search" placeholder="Cari" aria-describedby="button-addon1"
                                            class="form-control border-0 bg-light">
                                        <div class="input-group-append">
                                            <button id="button-addon1" type="submit"
                                                class="btn btn-link text-primary"><i class="bi bi-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form><!-- End sidebar search formn-->

                            <h4 class="sidebar-tit">Prodi</h4>
                            <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                                <select name="job_type_id"
                                    class="form-select form-select-sm p-2 form-control border-0 bg-light rounded rounded-pill"
                                    tabindex="-1" aria-hidden="true">
                                    <option value="" selected disabled>Pilih Prodi
                                    </option>
                                    <option value="1">Teknik Informatika</option>
                                    <option value="2">Teknik Geomatika</option>
                                    <option value="3">Teknik Animasi</option>
                                    <option value="4">Teknik Multimedia Dan Jaringan</option>
                                    <option value="5">Rekayasa Keamanan Siber</option>
                                    <option value="6">Teknologi Rekayasa Perangkat Lunak</option>
                                    <option value="7">Akutansi</option>
                                    <option value="8">Akutansi Manajerial</option>
                                    <option value="9">Administrasi Bisnis Terapan</option>
                                    <option value="10">Logistik Perdagangan Internasional</option>
                                    <option value="11">Administrasi Bisnis Terapan (Internasional Class)</option>
                                    <option value="12">Jalur Cepat Distribusi Barang</option>
                                    <option value="13">Teknik Elektronika Manufaktur</option>
                                    <option value="14">Teknologi Rekayasa Elektronika</option>
                                    <option value="15">Teknik Intrumentasi</option>
                                    <option value="16">Teknik Mekatronika</option>
                                    <option value="17">Teknologi Rekayasa Pembangkit Energi</option>
                                    <option value="18">Teknik Robotika</option>
                                    <option value="19">Teknik Elektro</option>
                                    <option value="20">Teknik Mesin</option>
                                    <option value="21">Teknik Perawatann Pesawat Udara</option>
                                    <option value="22">Teknologi Rekayasa Kontruksi Perkapalan</option>
                                    <option value="23">Teknologi Rekayasa pengelasan Dan Fabrikasi</option>
                                    <option value="24">Program Profesi Insinyur</option>
                                </select>
                            </div>
                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->
                    <div class="col-lg-8 entries">
                        <label>

                            <article class="entry" style="border-radius: 20px;">

                                <div class="entry-img" style="border-radius: 20px;">
                                    <img src="{{ asset('style/assets/img/bisma.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a>Bisma Arya Wardhana</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Teknologi Rekayasa Perangkat Lunak</a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <div class="card-body">
                                        <p class="mb-0"></p>
                                        <p class="mb-0">
                                        </p>
                                        <p class="mb-0">
                                        </p>
                                    </div>
                                    <div class="read-more">
                                        <a href="/mhsprof3">Lihat Detail</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->

                            <article class="entry" style="border-radius: 20px;">

                                <div class="entry-img" style="border-radius: 20px;">
                                    <img src="{{ asset('style/assets/img/hanna.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a>Hanna</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Teknologi Rekayasa Perangkat Lunak</a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <div class="card-body">
                                        <p class="mb-0"></p>
                                        <p class="mb-0">
                                        </p>
                                        <p class="mb-0">
                                        </p>
                                    </div>
                                    <div class="read-more">
                                        <a href="/mhsprof3">Lihat Detail</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->

                            <article class="entry" style="border-radius: 20px;">

                                <div class="entry-img" style="border-radius: 20px;">
                                    <img src="{{ asset('style/assets/img/fitri.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a>Fitriani</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Teknologi Rekayasa Perangkat Lunak</a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <div class="card-body">
                                        <p class="mb-0"></p>
                                        <p class="mb-0">
                                        </p>
                                        <p class="mb-0">
                                        </p>
                                    </div>
                                    <div class="read-more">
                                        <a href="/mhsprof3">Lihat Detail</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->

                            <article class="entry" style="border-radius: 20px;">

                                <div class="entry-img" style="border-radius: 20px;">
                                    <img src="{{ asset('style/assets/img/dilan.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a>Dilan</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Teknologi Rekayasa Perangkat Lunak</a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <div class="card-body">
                                        <p class="mb-0"></p>
                                        <p class="mb-0">
                                        </p>
                                        <p class="mb-0">
                                        </p>
                                    </div>
                                    <div class="read-more">
                                        <a href="/mhsprof3">Lihat Detail</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->

                    </div><!-- End blog entries list -->



                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

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
