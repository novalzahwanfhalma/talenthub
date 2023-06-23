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
    @include('layouts/components/navbarind')
    <!-- End Header -->

    <br>
    <br>
    <br>

    <div class="container pt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                                            Ubah Profil Perusahaan
                                        </h4>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form method="POST"
                                        action="/industri/profil/profil_ind/{{ $industri->id_industri }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Nama Perusahaan<i
                                                            class="text-danger"> *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="nama_industri"
                                                        value="{{ old('nama_industri', $industri->nama_industri) }}"
                                                        placeholder="Masukkan Nama Perusahaan" fdprocessedid="zt264h">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tipe Perusahaan<i
                                                            class="text-danger"> *</i></label>
                                                    <select class="form-select form-select-sm p-2" name="id_tipe"
                                                        placeholder="Pilih Tipe Perusahaan" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="" selected disabled>Pilih Tipe Perusahaan
                                                        </option>
                                                        @foreach ($tipe_industri as $tipind)
                                                            <option value="{{ $tipind->id_tipe }}">
                                                                {{ $tipind->nama_tipe }}</option>
                                                        @endforeach
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Bidang Perusahaan<i
                                                            class="text-danger"> *</i></label>
                                                    <select class="form-select form-select-sm p-2" name="id_bidang"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Sektor Usaha
                                                        </option>
                                                        @foreach ($bidang_industri as $biind)
                                                            <option value="{{ $biind->id_bidang }}">
                                                                {{ $biind->nama_bidang }}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tentang Perusahaan<i
                                                            class="text-danger"> *</i></label>
                                                    <textarea class="form-control form-control-sm p-2" name="deskripsi_industri"
                                                        value="{{ old('deskripsi_industri', $industri->deskripsi_industri) }}" placeholder="Tentang Perusahaan"
                                                        style="height: 100px">
                                                        </textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Alamat Perusahaan<i
                                                            class="text-danger"> *</i></label>
                                                    <textarea class="form-control form-control-sm p-2" name="alamat" value="{{ old('alamat', $industri->alamat) }}"
                                                        placeholder="Alamat Perusahaan" style="height: 100px">
                                                        </textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <h5 class="mb-10 pt-5 ps-1">Kontak Perusahaan</h5>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Email<i class="text-danger">
                                                            *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="email" value="{{ old('email', $industri->email) }}"
                                                        placeholder="Masukkan Email Perusahaan" fdprocessedid="9fbpx">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Nomor Telepon<i
                                                            class="text-danger"> *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="contact"
                                                        value="{{ old('contact', $industri->contact) }}"
                                                        placeholder="Masukkan Nomor Telephone Perusahaan"
                                                        fdprocessedid="c3jxsr">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Website</label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="website" value="{{ old('website', $industri->website) }}"
                                                        placeholder="Masukkan Website Perusahaan"
                                                        fdprocessedid="89ik">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Facebook</label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="facebook" value="{{ old('facebook', $industri->facebook) }}"
                                                        placeholder="Masukkan Link Facebook"
                                                        fdprocessedid="1pkjhm">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Instagram</label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="instagram" value="{{ old('instagram', $industri->instagram) }}"
                                                        placeholder="Masukkan Link Instagram"
                                                        fdprocessedid="qqkzh9">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Twitter</label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="twitter" value="{{ old('twitter', $industri->twitter) }}"
                                                        placeholder="Masukkan Link Twitter"
                                                        fdprocessedid="r78y2o">
                                                </div>
                                            </div>
                                            <br>

                                            <div class="col-lg-12">
                                                <h5 class="mb-10 pt-5 ps-1">Gambar Perusahaan</h5>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Logo</label>
                                                    <input type="file" class="form-control form-control-sm p-3"
                                                        name="logo" accept="image/*"
                                                        onchange="previewImage(event, '#previewLogo')">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <p class="form-label">Preview Logo</p>
                                                    <img src="{{ asset('img/logong.jpg') }}"
                                                        class="rounded float-start" id="previewLogo"
                                                        style="width:150px; height:200px;">
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


</body>

</html>
