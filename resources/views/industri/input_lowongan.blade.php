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

<body data-kt-name="metronic" id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
    class="app-default">

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
    <br>
    <br>

    <div class="container pt-5">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main" style="background-color: #779cb4;">
            <div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border">
                                <div class="card-header">
                                    <div class="card-title mt-3">
                                        <h4 class="fw-bold"><i class="bi bi-briefcase text-dark fs-3 me-2"></i>Tambah
                                            Lowongan Pekerjaan</h4>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <!--action utk kemana data dikirim, ingat han-->
                                        <input type="hidden" name="_token"
                                            value="504CL3EEhAetFJznRdQpgYaSncu1qrVgxNFgyVyH">
                                        <div class="row">
                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Judul Lowongan<i
                                                            class="text-danger"> *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="title" value=""
                                                        placeholder="Masukkan Judul Lowongan" fdprocessedid="lgb33s">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tipe Pekerjaan<i
                                                            class="text-danger"> *</i></label>
                                                    <select name="job_type_id" class="form-select form-select-sm p-2"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" selected disabled>Pilih Tipe Pekerjaan
                                                        </option>
                                                        <option value="1">Karyawan Kontrak</option>
                                                        <option value="2">Karyawan Tetap</option>
                                                        <option value="3">Magang</option>
                                                        <option value="4">Paruh Waktu</option>
                                                        <option value="5">Remote</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Bidang Pekerjaan<i
                                                            class="text-danger"> *</i></label>
                                                    <select name="job_field_id" class="form-select form-select-sm p-2"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Bidang Pekerjaan
                                                        </option>
                                                        <option value="3">Hardware &amp; Digital Peripherals
                                                        </option>
                                                        <option value="5">Operation &amp; System Tools</option>
                                                        <option value="7">IT Governance &amp; Management</option>
                                                        <option value="11">IT Services Management System</option>
                                                        <option value="35">Periklanan</option>
                                                        <option value="8">IT Project Management</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tingkat Jabatan<i
                                                            class="text-danger"> *</i></label>
                                                    <select name="job_level_id" class="form-select form-select-sm p-2"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Tingkat Jabatan
                                                        </option>
                                                        <option value="1">Internship</option>
                                                        <option value="2">Entry Level</option>
                                                        <option value="3">Mid Level</option>
                                                        <option value="4">Senior Level</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tahun Pengalaman Kerja<i
                                                            class="text-danger"> *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="experience_years"
                                                        placeholder="Masukkan Tahun Pengalaman Kerja" value=""
                                                        fdprocessedid="ahskkn">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Deskripsi Pekerjaan (Minimal 500
                                                        Karakter)<i class="text-danger"> *</i></label>
                                                    <textarea id="description" name="description" class="form-control form-control-sm"></textarea>
                                                </div>
                                            </div>


                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Persyaratan Keahlian atau
                                                        Keterampilan<i class="text-danger"> *</i></label>
                                                    <select name="skills[]" class="form-select form-select-sm p-2"
                                                        data-placeholder="Pilih Persyaratan Keahlian atau Keterampilan"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" selected disabled>Pilih Persyaratan
                                                            Keahlian atau Keterampilan</option>
                                                        <option value="1">.NET</option>
                                                        <option value="2">A++</option>
                                                        <option value="3">Abacus System</option>
                                                        <option value="4">ABAP</option>
                                                        <option value="5">ABODE ILLUSTRATOR</option>
                                                        <option value="6">ACAD</option>
                                                        <option value="7">ACCESS</option>
                                                        <option value="8">Account Management</option>
                                                        <option value="9">Account Servicing</option>
                                                        <option value="10">Accounting</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <h5 class="mb-10 pt-5 ps-1">Lokasi Pekerjaan</h5>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Provinsi<i class="text-danger">
                                                            *</i></label>
                                                    <select name="province_id" class="form-select form-select-sm p-2"
                                                        data-placeholder="Pilih Provinsi"
                                                        onchange="formCity(this, 'select[name=city_id]')"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Provinsi
                                                        </option>
                                                        <option value="1">Aceh</option>
                                                        <option value="2">Sumatera Utara</option>
                                                        <option value="3">Sumatera Barat</option>
                                                        <option value="4">Riau</option>
                                                        <option value="5">Kepulauan Riau</option>
                                                        <option value="6">Jambi</option>
                                                        <option value="7">Bengkulu</option>
                                                        <option value="8">Sumatera Selatan</option>
                                                        <option value="9">Kepulauan Bangka Belitung</option>
                                                        <option value="10">Lampung</option>
                                                        <option value="11">Banten</option>
                                                        <option value="12">Jawa Barat</option>
                                                        <option value="13">DKI Jakarta</option>
                                                        <option value="14">Jawa Tengah</option>
                                                        <option value="15">Jawa Timur</option>
                                                        <option value="16">DI Yogyakarta</option>
                                                        <option value="17">Bali</option>
                                                        <option value="18">Nusa Tenggara Barat</option>
                                                        <option value="19">Nusa Tenggara Timur</option>
                                                        <option value="20">Kalimantan Barat</option>
                                                        <option value="21">Kalimantan Selatan</option>
                                                        <option value="22">Kalimantan Tengah</option>
                                                        <option value="23">Kalimantan Timur</option>
                                                        <option value="24">Kalimantan Utara</option>
                                                        <option value="25">Gorontalo</option>
                                                        <option value="26">Sulawesi Selatan</option>
                                                        <option value="27">Sulawesi Tenggara</option>
                                                        <option value="28">Sulawesi Tengah</option>
                                                        <option value="29">Sulawesi Utara</option>
                                                        <option value="30">Sulawesi Barat</option>
                                                        <option value="31">Maluku</option>
                                                        <option value="32">Maluku Utara</option>
                                                        <option value="33">Papua</option>
                                                        <option value="34">Papua Barat</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <label class="required form-label">Kota / Kabupaten</label>
                                                <select name="city_id" class="form-select form-select-sm p-2"
                                                    data-placeholder="Pilih Kota / Kabupaten" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option value="">Pilih Kota / Kabupaten</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Alamat Lengkap<i
                                                            class="text-danger"> *</i></label>
                                                    <textarea name="address" class="form-select form-select-sm p-2" placeholder="Masukkan Alamat Lengkap"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <h5 class="mb-10 pt-5 ps-1">Kisaran Gaji</h5>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Minimal Gaji<i
                                                            class="text-danger"> *</i></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input type="text"
                                                            class="form-control form-control-sm p-2 currencyIDR"
                                                            name="salary_min" value=""
                                                            placeholder="Masukkan Minimal Gaji" inputmode="text"
                                                            fdprocessedid="9kodl">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Maksimal Gaji<i
                                                            class="text-danger"> *</i></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input type="text"
                                                            class="form-control form-control-sm p-2 currencyIDR"
                                                            name="salary_max" value=""
                                                            placeholder="Masukkan Maksimal Gaji" inputmode="text"
                                                            fdprocessedid="9kodl">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Status Menampilkan Gaji<i
                                                            class="text-danger"> *</i></label>
                                                    <select name="salary_disclosed"
                                                        class="form-select form-select-sm p-2"
                                                        data-placeholder="Pilih Status Menampilkan Gaji"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Status
                                                            Menampilkan Gaji</option>
                                                        <option value="1">Tampilkan</option>
                                                        <option value="0">Sembunyikan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <h5 class="mb-10 pt-5 ps-1">Tanggal Pendaftaran</h5>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tanggal Buka Pendaftaran<i
                                                            class="text-danger"> *</i></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm p-2"
                                                            name="registration_starts_at" value=""
                                                            placeholder="Masukkan Tanggal Buka Pendaftaran">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tanggal Tutup Pendaftaran<i
                                                            class="text-danger"> *</i></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm p-2"
                                                            name="registration_ends_at" value=""
                                                            placeholder="Masukkan Tanggal Tutup Pendaftaran">
                                                        <span class="input-group-text"><i
                                                                class="bi bi-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Status Pendaftaran<i
                                                            class="text-danger"> *</i></label>
                                                    <select name="is_active" class="form-select form-select-sm p-2"
                                                        data-placeholder="Pilih Status Pendaftaran" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Status
                                                            Pendaftaran</option>
                                                        <option value="1">Buka</option>
                                                        <option value="0">Tutup</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <a href="/lowongan_ind"
                                                    class="btn btn-secondary btn-sm px-10 p-2">Batalkan</a>
                                                <button type="submit"
                                                    class="btn btn-primary btn-sm px-10 p-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <div class="card-title d-flex align-items-center mt-3">
                                        <!-- mt-3 ditambahin utk padding atas-->
                                        <h4 class="fw-bold">

                                        </h4>
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


    <!-- Google tag (gtag.js) -->


    <!--js untuk datepicker-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/smoothness/jquery-ui.css">

    <script>
        $(function() {
            $('input[name="registration_starts_at"]').datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>
    <script>
        $(function() {
            $('input[name="registration_ends_at"]').datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>

    <!--js untuk textarea pada deskripsi-->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description',
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
            toolbar: 'undo redo | formatselect | bold italic underline | bullist numlist | link image | code',
            menubar: 'file edit view insert format tools table help',
            height: 300
        });
    </script>




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
