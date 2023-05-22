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
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="img/logothub.png" alt="">
                <span>TALENT HUB.</span>
            </a>
            <!-- .navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Lowongan</a></li>
                    <li><a class="nav-link scrollto" href="#services">Student</a></li>
                    <li><a class="nav-link scrollto" href="blog.html">CV</a></li>
                    &emsp;
                    <div class="mt-0 mb-0">
                        <img src="{{ asset('style/assets/img/noval.jpg') }}" class="rounded-circle img-fluid"
                            style="width: 45px;" />
                    </div>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar end-->

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Lowongan - blog ======= -->
        <div class="container-fluid">
            <div class="row">
                <section id="blog" class="blog">
                    <div class="container" data-aos="fade-up">

                        <class="row">

                            <div class="col-lg-3">

                                <div class="sidebar">
                                    <h4 class="sidebar-tit">Kata kunci</h4>
                                    <form action="">
                                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                                            <div class="input-group">
                                                <input type="search" placeholder="Cari"
                                                    aria-describedby="button-addon1"
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

                            </div><!-- End Recent Blog Posts Section -->

                    </div>

                </section>

                <!-- ======= Recent Blog Posts Section ======= -->
                <section id="recent-blog-posts" class="recent-blog-posts">
                    <div class="container" data-aos="fade-up">
                        <div class="row">

                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="post-box">
                                            <div class="post-img">
                                                <img src="assets/img/blog/blog-1.jpg" class="img-fluid"
                                                    alt="" />
                                            </div>
                                            <span class="post-date">Tue, September 15</span>
                                            <h3 class="post-title">
                                                Eum ad dolor et. Autem aut fugiat debitis voluptatem
                                                consequuntur sit
                                            </h3>
                                            <a href="blog-single.html"
                                                class="readmore stretched-link mt-auto"><span>Read
                                                    More</span><i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="post-box">
                                            <div class="post-img">
                                                <img src="assets/img/blog/blog-2.jpg" class="img-fluid"
                                                    alt="" />
                                            </div>
                                            <span class="post-date">Fri, August 28</span>
                                            <h3 class="post-title">
                                                Et repellendus molestiae qui est sed omnis voluptates magnam
                                            </h3>
                                            <a href="blog-single.html"
                                                class="readmore stretched-link mt-auto"><span>Read
                                                    More</span><i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="post-box">
                                            <div class="post-img">
                                                <img src="assets/img/blog/blog-3.jpg" class="img-fluid"
                                                    alt="" />
                                            </div>
                                            <span class="post-date">Mon, July 11</span>
                                            <h3 class="post-title">
                                                Quia assumenda est et veritatis aut quae
                                            </h3>
                                            <a href="blog-single.html"
                                                class="readmore stretched-link mt-auto"><span>Read
                                                    More</span><i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        </section>
        <!-- End Recent Blog Posts Section -->

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">

            <title>Blog - FlexStart Bootstrap Template</title>
            <meta content="" name="description">
            <meta content="" name="keywords">

            <!-- Favicons -->
            <link href="assets/img/favicon.png" rel="icon">
            <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

            <!-- Google Fonts -->
            <link
                href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
                rel="stylesheet">

            <!-- Vendor CSS Files -->
            <link href="assets/vendor/aos/aos.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
            <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
            <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
            <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

            <!-- Template Main CSS File -->
            <link href="assets/css/style.css" rel="stylesheet">

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
            <header id="header" class="header fixed-top">
                <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="assets/img/logo.png" alt="">
                        <span>FlexStart</span>
                    </a>

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about">About</a></li>
                            <li><a class="nav-link scrollto" href="#services">Services</a></li>
                            <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                            <li><a class="nav-link scrollto" href="#team">Team</a></li>
                            <li><a class="active" href="blog.html">Blog</a></li>
                            <li class="dropdown"><a href="#"><span>Drop Down</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Drop Down 1</a></li>
                                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="#">Deep Drop Down 1</a></li>
                                            <li><a href="#">Deep Drop Down 2</a></li>
                                            <li><a href="#">Deep Drop Down 3</a></li>
                                            <li><a href="#">Deep Drop Down 4</a></li>
                                            <li><a href="#">Deep Drop Down 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Drop Down 2</a></li>
                                    <li><a href="#">Drop Down 3</a></li>
                                    <li><a href="#">Drop Down 4</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                            <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->

                </div>
            </header><!-- End Header -->

            <main id="main">

                <!-- ======= Blog Section ======= -->
                <section id="blog" class="blog">
                    <div class="container" data-aos="fade-up">

                        <div class="row">

                            <div class="col-lg-8 entries">

                                <article class="entry">

                                    <div class="entry-img">
                                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque
                                            fuga qui quibusdam quia</a>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="blog-single.html">John Doe</a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                        2020</time></a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                    href="blog-single.html">12 Comments</a></li>
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
                                            <a href="blog-single.html">Read More</a>
                                        </div>
                                    </div>

                                </article><!-- End blog entry -->

                                <article class="entry">

                                    <div class="entry-img">
                                        <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="blog-single.html">John Doe</a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                        2020</time></a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                    href="blog-single.html">12 Comments</a></li>
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
                                            <a href="blog-single.html">Read More</a>
                                        </div>
                                    </div>

                                </article><!-- End blog entry -->

                                <article class="entry">

                                    <div class="entry-img">
                                        <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et
                                            soluta libero sit sint.</a>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="blog-single.html">John Doe</a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                        2020</time></a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                    href="blog-single.html">12 Comments</a></li>
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
                                            <a href="blog-single.html">Read More</a>
                                        </div>
                                    </div>

                                </article><!-- End blog entry -->

                                <article class="entry">

                                    <div class="entry-img">
                                        <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="entry-title">
                                        <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio
                                            deleniti explicabo eius exercitationem.</a>
                                    </h2>

                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="blog-single.html">John Doe</a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="blog-single.html"><time datetime="2020-01-01">Jan 1,
                                                        2020</time></a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                    href="blog-single.html">12 Comments</a></li>
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
                                            <a href="blog-single.html">Read More</a>
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

                                    <h4 class="sidebar-tit">Kata kunci</h4>
                                    <form action="">
                                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                                            <div class="input-group">
                                                <input type="search" placeholder="Cari"
                                                    aria-describedby="button-addon1"
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

            <!-- ======= Footer ======= -->
            <footer id="footer" class="footer">

                <div class="footer-newsletter">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <h4>Our Newsletter</h4>
                                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                            </div>
                            <div class="col-lg-6">
                                <form action="" method="post">
                                    <input type="email" name="email"><input type="submit" value="Subscribe">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-top">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-5 col-md-12 footer-info">
                                <a href="index.html" class="logo d-flex align-items-center">
                                    <img src="assets/img/logo.png" alt="">
                                    <span>FlexStart</span>
                                </a>
                                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa
                                    magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-6 footer-links">
                                <h4>Useful Links</h4>
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-2 col-6 footer-links">
                                <h4>Our Services</h4>
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                                <h4>Contact Us</h4>
                                <p>
                                    A108 Adam Street <br>
                                    New York, NY 535022<br>
                                    United States <br><br>
                                    <strong>Phone:</strong> +1 5589 55488 55<br>
                                    <strong>Email:</strong> info@example.com<br>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </footer><!-- End Footer -->

            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
            <script src="assets/vendor/aos/aos.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>

        </body>

        </html>


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
