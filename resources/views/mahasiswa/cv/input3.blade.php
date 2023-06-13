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
    @include('layouts/components/navbar')
    <!-- End Header -->

    <main id="main" style="text-align: center;">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs" style="text-align: center;">
            <div class="container">
                <ol style="text-align: center;">
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


    <div class="container pt-3">
        <div class="row">
            <div class="col-lg-11 mt-5 mb-5 mx-auto">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            <br>
                            <h4 class="fw-bold"><i class="bi bi-briefcase text-dark fs-3 me-2"></i>Pengalaman
                            </h4>
                        </div>
                        <!-- Tombol untuk membuka modal -->
                        <div class="card-title text-end">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#myModal">
                                <i class="bi bi-plus-circle"></i>
                                Tambah Pengalaman
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengalaman</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <form method="POST" action="" enctype="multipart/form-data">
                                                <input type="hidden" name="_token"
                                                    value="QzikhfB5RhL9odgFXj3QcGV1vVYpTTwuy43ulwVh">
                                                <div class="row">
                                                    <div class="col-lg-12 p-3">
                                                        <div class="form-group mb-10">
                                                            <label class="required form-label">Judul<i
                                                                    class="text-danger">
                                                                    *</i></label>
                                                            <input type="text"
                                                                class="form-control form-control-sm p-2"
                                                                name="name" value=""
                                                                placeholder="Masukkan Judul" fdprocessedid="zt264h">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 p-3">
                                                        <div class="form-group mb-10">
                                                            <label class="required form-label">Perusahaan<i
                                                                    class="text-danger">
                                                                    *</i></label>
                                                            <input type="text"
                                                                class="form-control form-control-sm p-2"
                                                                name="name" value=""
                                                                placeholder="Masukkan Perusahaan"
                                                                fdprocessedid="zt264h">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 p-3">
                                                        <div class="form-group mb-10">
                                                            <label class="required form-label">Lokasi<i
                                                                    class="text-danger">
                                                                    *</i></label>
                                                            <input type="text"
                                                                class="form-control form-control-sm p-2"
                                                                name="name" value=""
                                                                placeholder="Masukkan Lokasi" fdprocessedid="zt264h">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 p-3">
                                                        <div class="form-group mb-10">
                                                            <label class="required form-label">Tanggal Mulai<i
                                                                    class="text-danger">*</i></label>
                                                            <input type="date"
                                                                class="form-control form-control-sm p-2"
                                                                name="tanggal" value=""
                                                                placeholder="Masukkan Tanggal Mulai" fdprocessedid="zt264h">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 p-3">
                                                        <div class="form-group mb-10">
                                                            <label class="required form-label">Tanggal Selesai<i
                                                                    class="text-danger">*</i></label>
                                                            <input type="date"
                                                                class="form-control form-control-sm p-2"
                                                                name="tanggal" value=""
                                                                placeholder="Masukkan Tanggal Selesai" fdprocessedid="zt264h">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 p-3">
                                                        <div class="form-group mb-10">
                                                            <label class="required form-label">tipe<i
                                                                    class="text-danger">
                                                                    *</i></label>
                                                            <select class="form-select form-select-sm p-2"
                                                                name="company_category_id" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option value="" disabled selected>Pilih Tipe
                                                                </option>
                                                                <option value="1">Magang
                                                                </option>
                                                                <option value="2">Full Time</option>
                                                                <option value="3">Part Time
                                                                </option>
                                                                <option value="4">Kontrak</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-dashed datatable gy-4 scrollable">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th class="min-w-0px">No</th>
                                        <th class="min-w-500px">Judul</th>
                                        <th class="min-w-200px">Perusahaan</th>
                                        <th class="min-w-200px">Lokasi</th>
                                        <th class="min-w-200px">Tanggal Mulai</th>
                                        <th class="min-w-200px">Tanggal Selesai</th>
                                        <th class="min-w-200px">Tipe</th>
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
