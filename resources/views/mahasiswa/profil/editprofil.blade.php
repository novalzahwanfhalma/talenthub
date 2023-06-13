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
                        <a>
                            <button onclick="cetakPDF()"
                                style="color: #fff; background-color: #2168c5; border: none; border-radius: 7px;">
                                Cetak CV
                            </button>
                        </a>
                    </li>

                </ol>
            </div>
        </section><!-- End Breadcrumbs -->
    </main>

    <div class="container pt-5">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main" style="background-color: #779cb4;">
            <div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card border">
                                <div class="card-header">
                                    <div class="card-title d-flex align-items-center mt-3">
                                        <!-- mt-3 ditambahin utk padding atas-->
                                        <h4 class="fw-bold">
                                            <i class="bi bi-buildings text-dark fs-3 me-1"></i>
                                            Kelola Profil
                                        </h4>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <input type="hidden" name="_token"
                                            value="QzikhfB5RhL9odgFXj3QcGV1vVYpTTwuy43ulwVh">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5 class="mb-10 pt-5 ps-1">Foto Profil</h5>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Preview <b class="text-danger">*</b></label>
                                                <div>

                                                    <img class="my-2 img-fluid"
                                                        src="{{ asset('style/assets/img/noval.jpg') }}"
                                                        style="width: 300px;" />

                                                </div>
                                            </div>

                                            <div class="form-group" id="ganti_foto_div" style="display:">
                                                <label for="nama">Ganti foto <b class="text-danger">*</b></label>
                                                <input placeholder="Upload Foto" type="file"
                                                    accept="image/png, image/jpg, img/jepg" id="foto"
                                                    name="foto"
                                                    class="form-control @error('foto') is-invalid @enderror">
                                                @error('foto')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-lg-12">
                                                <h5 class="mb-10 pt-5 ps-1">Data Mahasiswa</h5>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Nama<i class="text-danger">
                                                            *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="name" value="" placeholder="Masukkan Nama"
                                                        fdprocessedid="zt264h">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Perguruan Tinggi<i
                                                            class="text-danger">
                                                            *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="name" value=""
                                                        placeholder="Masukkan Perguruan Tinggi"
                                                        fdprocessedid="zt264h">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">NIM<i class="text-danger">
                                                            *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="name" value="" placeholder="Masukkan NIM"
                                                        fdprocessedid="zt264h">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">IPK<i class="text-danger">
                                                            *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="name" value="" placeholder="Masukkan IPK"
                                                        fdprocessedid="zt264h">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Program Studi<i
                                                            class="text-danger"> *</i></label>
                                                    <select class="form-select form-select-sm p-2"
                                                        name="company_type_id" placeholder="Pilih Tipe Perusahaan"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" selected disabled>Pilih Program Studi
                                                        </option>
                                                        <option value="1">Teknik Informatika</option>
                                                        <option value="2">Teknik Geomatika</option>
                                                        <option value="3">Teknik Animasi</option>
                                                        <option value="4">Teknik Multimedia Dan Jaringan</option>
                                                        <option value="5">Rekayasa Keamanan Siber</option>
                                                        <option value="6">Teknologi Rekayasa Perangkat Lunak
                                                        </option>
                                                        <option value="7">Akutansi</option>
                                                        <option value="8">Akutansi Manajerial</option>
                                                        <option value="9">Administrasi Bisnis Terapan</option>
                                                        <option value="10">Logistik Perdagangan Internasional
                                                        </option>
                                                        <option value="11">Administrasi Bisnis Terapan
                                                            (Internasional Class)</option>
                                                        <option value="12">Jalur Cepat Distribusi Barang</option>
                                                        <option value="13">Teknik Elektronika Manufaktur</option>
                                                        <option value="14">Teknologi Rekayasa Elektronika</option>
                                                        <option value="15">Teknik Intrumentasi</option>
                                                        <option value="16">Teknik Mekatronika</option>
                                                        <option value="17">Teknologi Rekayasa Pembangkit Energi
                                                        </option>
                                                        <option value="18">Teknik Robotika</option>
                                                        <option value="19">Teknik Elektro</option>
                                                        <option value="20">Teknik Mesin</option>
                                                        <option value="21">Teknik Perawatann Pesawat Udara</option>
                                                        <option value="22">Teknologi Rekayasa Kontruksi Perkapalan
                                                        </option>
                                                        <option value="23">Teknologi Rekayasa pengelasan Dan
                                                            Fabrikasi</option>
                                                        <option value="24">Program Profesi Insinyur</option>
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Jenjang<i class="text-danger">
                                                            *</i></label>
                                                    <select class="form-select form-select-sm p-2"
                                                        name="company_category_id" tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Jenjang
                                                        </option>
                                                        <option value="1">D3
                                                        </option>
                                                        <option value="2">D4</option>

                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Status<i class="text-danger">
                                                            *</i></label>
                                                    <select class="form-select form-select-sm p-2"
                                                        name="company_volume_id" tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Status
                                                        </option>
                                                        <option value="1">Aktif</option>
                                                        <option value="3">Cuti</option>
                                                        <option value="4">Lulus</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Jenis Kelamin<i
                                                            class="text-danger">
                                                            *</i></label>
                                                    <select class="form-select form-select-sm p-2" name="city_id"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="88" disabled selected>Pilih Jenis Kelamin
                                                        </option>
                                                        <option value="88">Pria</option>
                                                        <option value="89">Wanita</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Alamat<i class="text-danger">
                                                            *</i></label>
                                                    <textarea class="form-control form-control-sm p-2" name="address" placeholder="Alamat Perusahaan"
                                                        style="height: 100px">
                                                        </textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <h5 class="mb-10 pt-5 ps-1">Kontak</h5>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Email<i class="text-danger">
                                                            *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="email" value="" placeholder="Masukkan Email"
                                                        fdprocessedid="9fbpx">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Nomor Telepon<i
                                                            class="text-danger"> *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="phone" value=""
                                                        placeholder="Masukkan Nomor Telepon" fdprocessedid="c3jxsr">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <button type="submit" class="btn btn-primary btn-sm px-10 p-2"
                                                    fdprocessedid="v6g6ed">
                                                    Simpan Perubahan
                                                </button>
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

                    <div class="modal fade" tabindex="-1" id="modalDelete">
                        <div class="modal-dialog">
                            <div class="modal-content bg-light-danger">
                                <div class="modal-header">
                                    <div class="text-center">
                                        <h3 class="fw-bolder">Hapus Data</h3>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <p>Apakah anda yakin ingin menghapus data? data yang dihapus tidak dapat
                                        dikembalikan.</p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button"
                                        class="btn btn-outline btn-outline-danger btn-active-danger"
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <script>
        function cetakPDF() {
            const doc = new jsPDF();
            doc.text('Contoh Teks PDF', 10, 10);
            doc.save('dokumen.pdf');
        }
    </script>


</body>

</html>
