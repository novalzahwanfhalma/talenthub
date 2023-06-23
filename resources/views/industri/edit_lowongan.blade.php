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
                                <li>{{$error}}</li>
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
                                    <div class="card-title mt-3">
                                        <h4 class="fw-bold"><i class="bi bi-briefcase text-dark fs-3 me-2"></i>
                                            Edit Lowongan Pekerjaan</h4>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="/lowongan/edit_lowongan/{{ $lowongan->id_lowongan }}" enctype="multipart/form-data">
                                        <!--action utk kemana data dikirim, ingat han-->
                                        @csrf @method('PUT')
                                            <input type="hidden" name="id_industri" value="{{ auth()->guard('industri')->user()->id_industri }}">
                                        <div class="row">
                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Judul Lowongan<i
                                                            class="text-danger"> *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="judul" value="{{ $lowongan->judul }}"
                                                        placeholder="Masukkan Judul Lowongan" fdprocessedid="lgb33s">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tipe Pekerjaan<i
                                                            class="text-danger"> *</i></label>
                                                    <select name="id_tipe" class="form-select form-select-sm p-2"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" selected disabled>Pilih Tipe Pekerjaan
                                                        </option>
                                                        <option value="1" {{ $lowongan->id_tipe == '1' ? 'selected' : '' }}>Karyawan Kontrak</option>
                                                        <option value="2" {{ $lowongan->id_tipe == '2' ? 'selected' : '' }}>Karyawan Tetap</option>
                                                        <option value="3" {{ $lowongan->id_tipe == '3' ? 'selected' : '' }}>Magang</option>
                                                        <option value="4" {{ $lowongan->id_tipe == '4' ? 'selected' : '' }}>Paruh Waktu</option>
                                                        <option value="5" {{ $lowongan->id_tipe == '5' ? 'selected' : '' }}>Remote</option>
                                                    </select>
                                                </div>
                                            </div>

                                            

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tingkat Pekerjaan
                                                        <i class="text-danger"> *</i></label>
                                                    <select name="id_level" class="form-select form-select-sm p-2"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Tingkat Pekerjaan
                                                        </option>
                                                        <option value="1" {{ $lowongan->id_level == '1' ? 'selected' : '' }}>Internship</option>
                                                        <option value="2" {{ $lowongan->id_level == '2' ? 'selected' : '' }}>Entry Level</option>
                                                        <option value="3" {{ $lowongan->id_level == '3' ? 'selected' : '' }}>Mid Level</option>
                                                        <option value="4" {{ $lowongan->id_level == '4' ? 'selected' : '' }}>Senior Level</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Bidang Pekerjaan<i
                                                            class="text-danger"> *</i></label>
                                                    <select name="id_bidang" class="form-select form-select-sm p-2"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Bidang Pekerjaan
                                                        </option>
                                                        <option value="1" {{ $lowongan->id_bidang == '1' ? 'selected' : '' }}>Programming &amp; Software Development
                                                        </option>
                                                        <option value="2" {{ $lowongan->id_bidang == '2' ? 'selected' : '' }}>IT Consultancy &amp; Advisory</option>
                                                        <option value="3" {{ $lowongan->id_bidang == '3' ? 'selected' : '' }}>Network &amp; Infrastructure</option>
                                                        <option value="4" {{ $lowongan->id_bidang == '4' ? 'selected' : '' }}>Data Management System</option>
                                                        <option value="5" {{ $lowongan->id_bidang == '5' ? 'selected' : '' }}>IT Security &amp; Compliance</option>
                                                        <option value="6" {{ $lowongan->id_bidang == '6' ? 'selected' : '' }}>Information System &amp; Technology Development</option>
                                                        <option value="7" {{ $lowongan->id_bidang == '7' ? 'selected' : '' }}>Sales</option>
                                                        <option value="8" {{ $lowongan->id_bidang == '8' ? 'selected' : '' }}>Desain Komunikasi Visual</option>
                                                        <option value="9" {{ $lowongan->id_bidang == '9' ? 'selected' : '' }}>Administrasi</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Daya Tampung<i
                                                            class="text-danger"> *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="daya_tampung" value="{{ $lowongan->daya_tampung }}"
                                                        placeholder="Masukkan Judul Lowongan" fdprocessedid="lgb33s">
                                                </div>
                                            </div>

                                            
                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Kriteria (Minimal 500
                                                        Karakter)<i class="text-danger"> *</i></label>
                                                    <textarea id="description" name="kriteria" class="form-control form-control-sm p-2" rows="7" oninput="countCharacters()">{{ $lowongan->kriteria }}</textarea>
                                                    <span id="characterCount">0</span> characters
                                                </div>
                                            </div>


                                        
                                            <div class="col-lg-12">
                                                <h5 class="mb-10 pt-5 ps-1">Lokasi Pekerjaan</h5>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Alamat Lengkap<i class="text-danger"> *</i></label>
                                                    <textarea name="lokasi" class="form-select form-select-sm p-2" placeholder="Masukkan Alamat Lengkap">{{ $lowongan->lokasi }}</textarea>
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
                                                        <input type="text" class="form-control form-control-sm p-2 currencyIDR" name="minimal_gaji" value="{{ $lowongan->minimal_gaji }}" placeholder="Masukkan Minimal Gaji" inputmode="text"
                                                            fdprocessedid="9kodl">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Maksimal Gaji<i class="text-danger"> *</i></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">Rp.</span>
                                                        <input type="text" class="form-control form-control-sm p-2 currencyIDR" name="maksimal_gaji" value="{{ $lowongan->maksimal_gaji }}"
                                                            placeholder="Masukkan Minimal Gaji" inputmode="text" fdprocessedid="9kodl">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <h5 class="mb-10 pt-5 ps-1">Tanggal Pendaftaran</h5>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tanggal Buka Pendaftaran<i class="text-danger"> *</i></label>
                                                    <div class="input-group">
                                                        <input class="form-control form-control-sm p-2" name="tanggal_buka" value="{{ $lowongan->tanggal_buka }}" placeholder="Masukkan Tanggal Buka Pendaftaran">
                                                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tanggal Tutup Pendaftaran<i
                                                            class="text-danger"> *</i></label>
                                                    <div class="input-group">
                                                        <input class="form-control form-control-sm p-2" name="tanggal_tutup" value="{{ $lowongan->tanggal_tutup }}" placeholder="Masukkan Tanggal Tutup Pendaftaran">
                                                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <a href="/industri/lowongan_ind" class="btn btn-secondary btn-sm px-10 p-2">Batalkan</a>
                                                <button type="submit" class="btn btn-primary btn-sm px-10 p-2">Submit</button>
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
            $('input[name="tanggal_buka"]').datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>
    <script>
        $(function() {
            $('input[name="tanggal_tutup"]').datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>

    <!--js untuk textarea pada kriteria untuk hitung karakter-->
    <script>
        function countCharacters() {
          var textarea = document.getElementById("description");
          var count = textarea.value.length;
          var countElement = document.getElementById("characterCount");
          countElement.textContent = count;
        }
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
