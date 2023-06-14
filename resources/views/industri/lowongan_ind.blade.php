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

</head>

<body>

    <!-- ======= Header ======= -->
<<<<<<< HEAD
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="img/logothub.png" alt="">
                <span class="spn">TALENT HUB.</span>
            </a>
            <!-- .navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/indexind">Home</a></li>
                    <li><a class="nav-link scrollto" href="/lowonganind">Lowongan</a></li>
                    <li><a class="nav-link scrollto" href="/indmhs">Mahasiswa</a></li>
                    <li><a class="nav-link scrollto" href="/indind">Perusahaan</a></li>
                    <li class="dropdown"><a href="#"><span>
                                <div id="pp" class="mt-0 mb-0 ms-2">
                                    <img src="{{ asset('style/assets/img/noval.jpg') }}"
                                        class="rounded-circle img-fluid" style="width: 50px;" />
                                </div>
                            </span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/indprof">Profil & CV</a></li>
                            <li><a href="/indexind">Log out</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar end-->

        </div>
    </header><!-- End Header -->
=======
    @include('layouts/components/navbarind')
    <!-- End Header -->
>>>>>>> 56e74b71272f9340f66ed3f2d8cc4660bfdb61da
    <br>

    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-11 mt-5 mb-5 mx-auto">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            <br>
                            <h4 class="fw-bold"><i class="bi bi-briefcase text-dark fs-3 me-2"></i>Lowongan Pekerjaan
                            </h4>
                        </div>
                        <div class="card-title text-end">
                            <a href="/inputind" class="btn btn-success fw-semibold btn-sm">
                                <i class="bi bi-plus-circle"></i>
                                Tambah Lowongan
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed datatable gy-4 scrollable">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th class="min-w-0px">No</th>
                                        <th class="min-w-500px">Nama Lowongan</th>

                                        <th class="min-w-150px">Status Pendaftaran</th>
                                        <th class="min-w-200px">Tanggal Dibuat</th>
                                        <th class="min-w-100px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            <h6 class="fw-bolder fs-7">Tidak ada data</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- belum tau fungsi ini apa tapi biarkan saja-->
            <div class="modal fade" tabindex="-1" id="modalDelete">
                <div class="modal-dialog">
                    <div class="modal-content bg-light-danger">
                        <div class="modal-header">
                            <div class="text-center">
                                <h3 class="fw-bolder">Hapus Data</h3>
                            </div>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin ingin menghapus data? data yang dihapus tidak dapat dikembalikan.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline btn-outline-danger btn-active-danger"
                                data-bs-dismiss="modal">Batalkan</button>
                            <a href="" class="btn btn-danger" id="urlDelete">Hapus Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

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
