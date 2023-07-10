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
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3
                                style="font-size: 24px; font-weight: bold; color: #5b5555; text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                Programming &amp; Software Development</h3>
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

                            &nbsp;

                            <h4 class="sidebar-tit">Status</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Karyawan Tetap</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Magang</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Paruh Waktu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Karyawan
                                    Kontrak</label>
                            </div>
                            &nbsp;
                            <!-- End sidebar categories-->

                            <h3 class="sidebar-tit">Pengalaman</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Tingkat Pemula</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Tingkat
                                    Menengah</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Tingkat Senior</label>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                    <div class="col-lg-8 entries">
                        <label>
                            @foreach ($lowongan as $index => $data)
                            {{--nanti coba ganti forelse biar bisa empty data--}}
                            <article class="entry">


                                    <h2 class="entry-title">
                                        <a href="/lowongan3">{{$data->judul}}</a>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="blog-single.html">{{$data->industri->nama_industri}}</a>
                                            </li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="blog-single.html"><time datetime="2020-01-01">{{$data->tanggal_tutup}}</time></a></li>
                                        </ul>
                                    </div>

                                    <div class="entry-content">
                                        <p>
                                            {{-- {{ Auth::guard('industri')->user()->deskripsi_industri }} --}}
                                        </p>
                                        <div class="read-more">
                                            <a href="/lowongan3">Lihat Detail</a>
                                        </div>
                                    </div>

                            </article>
                            @endforeach <!-- End blog entry -->

                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ asset('style/assets/img/dc-ar19-0136-sld.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="blog-single.html">PT Sangkurier</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Programming &amp; Software Development</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">Jul 22,
                                                    2023</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        PT Sangkurier adalah sebuah perusahaan teknologi informasi yang berfokus
                                        pada
                                        pengembangan
                                        solusi perangkat lunak untuk sektor perbankan. Mereka menyediakan produk dan
                                        layanan yang dirancang khusus untuk memenuhi kebutuhan sistem informasi
                                        perbankan modern.
                                    </p>
                                    <div class="read-more">
                                        <a href="blog-single.html">Lihat Detail</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->

                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ asset('style/assets/img/jm-default1.7612af47.jpg') }}"
                                        alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="blog-single.html">PT Galleon</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Programming &amp; Software Development</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">August 12,
                                                    2023</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        PT Galleon adalah sebuah perusahaan teknologi informasi yang bergerak di
                                        bidang
                                        pengembangan perangkat lunak khusus untuk industri e-commerce. Mereka
                                        menyediakan solusi yang dirancang untuk mendukung operasional e-commerce,
                                        memperbaiki pengalaman pengguna, dan meningkatkan efisiensi bisnis.
                                    </p>
                                    <div class="read-more">
                                        <a href="blog-single.html">Lihat Detail</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->

                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ asset('style/assets/img/PT-Nusahadi-Citraharmonis-768x427.jpg') }}"
                                        alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="blog-single.html">PT Natsuri</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Programming &amp; Software Development</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">August 6,
                                                    2023</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        PT Natsuri adalah perusahaan teknologi informasi yang berfokus pada
                                        pengembangan
                                        sistem manajemen sumber daya manusia (HRM) berbasis cloud. Mereka
                                        menyediakan
                                        solusi yang dirancang khusus untuk membantu perusahaan dalam mengelola
                                        proses
                                        HRM secara efisien dan efektif.
                                    </p>
                                    <div class="read-more">
                                        <a href="blog-single.html">Lihat Detail</a>
                                    </div>
                                </div>


                    {{ $lowongan->links() }}


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
