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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
                                            Kelola Profil
                                        </h4>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="/mahasiswa/profil/editprofil/{{ $mahasiswa->nim }}"
                                        enctype="multipart/form-data">
                                        @csrf @method('PUT')
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
                                                        name="nama_mhs"
                                                        value="{{ old('nama_mhs', $mahasiswa->nama_mhs) }}"
                                                        placeholder="Masukkan Nama" fdprocessedid="zt264h">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Deskripsi<i
                                                            class="text-danger">
                                                            *</i></label>
                                                    <textarea class="form-control form-control-sm p-2" name="deskripsi"
                                                        value="" placeholder="Alamat Perusahaan" style="height: 100px">{{ old('deskripsi', $mahasiswa->deskripsi) }}
                                                        </textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">NIM<i class="text-danger">
                                                            *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="nim" value="{{ old('nim', $mahasiswa->nim) }}"
                                                        placeholder="Masukkan NIM" fdprocessedid="zt264h" disabled>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">IPK<i class="text-danger">
                                                            *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="ipk" value="{{ old('ipk', $mahasiswa->ipk) }}"
                                                        placeholder="Masukkan IPK" fdprocessedid="zt264h">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Jenis Kelamin<i
                                                            class="text-danger">
                                                            *</i></label>
                                                    <select class="form-select form-select-sm p-2"
                                                        name="jenis_kelamin" tabindex="-1" aria-hidden="true">
                                                        <option value="0" disabled selected>Pilih Jenis Kelamin
                                                        </option>
                                                        <option value="Laki - laki">Laki - laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Program Studi<i
                                                            class="text-danger"> *</i></label>
                                                    <select class="form-select form-select-sm p-2" name="id_prodi"
                                                        placeholder="Pilih Tipe Perusahaan" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option value="" selected disabled>Pilih Program Studi
                                                        </option>
                                                        @foreach ($prodi as $item)
                                                            <option value="{{ $item->id_prodi }}">
                                                                {{ $item->nama_prodi }}</option>
                                                        @endforeach
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Status<i class="text-danger">
                                                            *</i></label>
                                                    <select class="form-select form-select-sm p-2" name="status"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Status
                                                        </option>
                                                        <option value="Aktif">Aktif</option>
                                                        <option value="Cuti">Cuti</option>
                                                        <option value="Lulus">Lulus</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Alamat<i class="text-danger">
                                                            *</i></label>
                                                    <textarea class="form-control form-control-sm p-2" name="alamat" value=""
                                                        placeholder="Alamat Perusahaan" style="height: 100px">{{ old('alamat', $mahasiswa->alamat) }}
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
                                                        name="email" value="{{ old('email', $mahasiswa->email) }}"
                                                        placeholder="Masukkan Email" fdprocessedid="9fbpx">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Nomor Telepon<i
                                                            class="text-danger"> *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="no_hp" value="{{ old('no_hp', $mahasiswa->no_hp) }}"
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
