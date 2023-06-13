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
                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ asset('style/assets/img/fitri.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="/lowongan3">Dolorum optio tempore voluptas dignissimos cumque
                                        fuga qui quibusdam quia</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Programming &amp; Software Development</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                    2020</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                        praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                        Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde
                                        soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur
                                        assumenda perferendis dolore.
                                    </p>
                                    <div class="read-more">
                                        <a href="/lowongan3">Lihat Detail</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->

                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ asset('style/assets/img/hanna.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Programming &amp; Software Development</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                    2020</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis
                                        illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                                        Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut.
                                        Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum
                                        corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas.
                                        Maxime sed tempore enim omnis non alias odio quos distinctio.
                                    </p>
                                    <div class="read-more">
                                        <a href="blog-single.html">Lihat Detail</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->

                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ asset('style/assets/img/bisma.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et
                                        soluta libero sit sint.</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Programming &amp; Software Development</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                    2020</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit
                                        autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur
                                        sunt omnis.
                                        Doloremque est saepe laborum aut. Ipsa cupiditate ex harum at recusandae
                                        nesciunt. Ut dolores velit.
                                    </p>
                                    <div class="read-more">
                                        <a href="blog-single.html">Lihat Detail</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->

                            <article class="entry">

                                <div class="entry-img">
                                    <img src="{{ asset('style/assets/img/dilan.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio
                                        deleniti explicabo eius exercitationem.</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Programming &amp; Software Development</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                    2020</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque
                                        quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste
                                        omnis a qui.
                                        Quia sed sunt. Ea asperiores expedita et et delectus voluptates rerum. Id
                                        saepe ut itaque quod qui voluptas nobis porro rerum. Quam quia nesciunt qui
                                        aut est non omnis. Inventore occaecati et quaerat magni itaque nam voluptas.
                                        Voluptatem ducimus sint id earum ut nesciunt sed corrupti nemo.
                                    </p>
                                    <div class="read-more">
                                        <a href="blog-single.html">Lihat Detail</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->

                            <div class="blog-pagination">
                                <ul class="justify-content-center">
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                </ul>
                            </div>

                    </div><!-- End blog entries list -->

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
                                                class="btn btn-link text-primary"><i
                                                    class="bi bi-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form><!-- End sidebar search formn-->

                            <h4 class="sidebar-tit">Bidang pekerjaan</h4>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pilih Opsi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Opsi 1</a>
                                    <a class="dropdown-item" href="#">Opsi 2</a>
                                    <a class="dropdown-item" href="#">Opsi 3</a>
                                </div>
                            </div>

                            &nbsp;

                            <h4 class="sidebar-tit">Status</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Karyawan Tetap</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Magang</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Paruh Waktu</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Karyawan
                                    Kontrak</label>
                            </div>
                            &nbsp;
                            <!-- End sidebar categories-->

                            <h3 class="sidebar-tit">Pengalaman</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Tingkat Pemula</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Tingkat
                                    Menengah</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Tingkat Senior</label>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

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
