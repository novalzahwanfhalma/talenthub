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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
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
                                            <form method="POST" action="cv3/store" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="nim" value="{{ auth()->user()->nim }}">
                                                <div class="row">
                                                    <div class="col-lg-12 p-3">
                                                        <div class="form-group mb-10">
                                                            <label class="required form-label">Judul<i
                                                                    class="text-danger">
                                                                    *</i></label>
                                                            <input type="text"
                                                                class="form-control form-control-sm p-2"
                                                                name="judul" value=""
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
                                                                name="perusahaan" value=""
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
                                                                name="lokasi" value=""
                                                                placeholder="Masukkan Lokasi" fdprocessedid="zt264h">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 p-3">
                                                        <div class="form-group mb-10">
                                                            <label class="required form-label">Tanggal Mulai<i
                                                                    class="text-danger">*</i></label>
                                                            <input type="date"
                                                                class="form-control form-control-sm p-2"
                                                                name="tgl_mulai" value=""
                                                                placeholder="Masukkan Tanggal Mulai" fdprocessedid="zt264h">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 p-3">
                                                        <div class="form-group mb-10">
                                                            <label class="required form-label">Tanggal Selesai<i
                                                                    class="text-danger">*</i></label>
                                                            <input type="date"
                                                                class="form-control form-control-sm p-2"
                                                                name="tgl_selesai" value=""
                                                                placeholder="Masukkan Tanggal Selesai" fdprocessedid="zt264h">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 p-3">
                                                        <div class="form-group mb-10">
                                                            <label class="required form-label">Tipe<i
                                                                    class="text-danger">
                                                                    *</i></label>
                                                            <select class="form-select form-select-sm p-2"
                                                                name="tipe" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option value="" disabled selected>Pilih Tipe
                                                                </option>
                                                                <option value="1">Magang
                                                                </option>
                                                                <option value="2">Kontrak</option>
                                                                <option value="3">Part Time
                                                                </option>
                                                                <option value="4">Full Time</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
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
                                    @forelse ( $pengalaman->where('nim', auth()->user()->nim) as $index => $data )
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $data->judul }}</td>
                                            <td>{{ $data->perusahaan }}</td>
                                            <td>{{ $data->lokasi }}</td>
                                            <td>{{ $data->tgl_mulai }}</td>
                                            <td>{{ $data->tgl_selesai }}</td>
                                            <td>{{ $data->tipe }}</td>

                                            <td>
                                                <a href="/mahasiswa/edit-modal" class="btn btn-sm btn-warning mx-1 my-1" data-bs-toggle="modal" data-bs-target="#EditModal">
                                                    <i class="bi bi-search"></i> Edit</a>
                                                    {{--href="/student/edit/{{ $data->nim }}"--}}


                                                    {{--EDIT MODAL--}}

                                                <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Pengalaman</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <form method="POST" action="cv3/edit-modal/{{ $data->id_pengalaman }}" enctype="multipart/form-data">
                                                                        @csrf @method('PUT')
                                                                        <input type="hidden" name="nim" value="{{ auth()->user()->nim }}">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 p-3">
                                                                                <div class="form-group mb-10">
                                                                                    <label class="required form-label">Judul<i
                                                                                            class="text-danger">
                                                                                            *</i></label>
                                                                                    <input type="text"
                                                                                        class="form-control form-control-sm p-2  @error('judul') is-invalid @enderror" value="{{ $data->judul }}"
                                                                                        name="judul" value=""
                                                                                        placeholder="Masukkan Judul" fdprocessedid="zt264h">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 p-3">
                                                                                <div class="form-group mb-10">
                                                                                    <label class="required form-label">Perusahaan<i
                                                                                            class="text-danger">
                                                                                            *</i></label>
                                                                                    <input type="text"
                                                                                        class="form-control form-control-sm p-2 @error('perusahaan') is-invalid @enderror"
                                                                                        name="perusahaan" value="{{ $data->perusahaan }}"
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
                                                                                        class="form-control form-control-sm p-2 @error('lokasi') is-invalid @enderror"
                                                                                        name="lokasi" value="{{ $data->lokasi }}"
                                                                                        placeholder="Masukkan Lokasi" fdprocessedid="zt264h">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 p-3">
                                                                                <div class="form-group mb-10">
                                                                                    <label class="required form-label">Tanggal Mulai<i
                                                                                            class="text-danger">*</i></label>
                                                                                    <input type="date"
                                                                                        class="form-control form-control-sm p-2 @error('tgl_mulai') is-invalid @enderror"
                                                                                        name="tgl_mulai" value="{{ $data->tgl_mulai }}"
                                                                                        placeholder="Masukkan Tanggal Mulai" fdprocessedid="zt264h">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 p-3">
                                                                                <div class="form-group mb-10">
                                                                                    <label class="required form-label">Tanggal Selesai<i
                                                                                            class="text-danger">*</i></label>
                                                                                    <input type="date"
                                                                                        class="form-control form-control-sm p-2 @error('tgl_selesai') is-invalid @enderror"
                                                                                        name="tgl_selesai" value="{{ $data->tgl_selesai }}"
                                                                                        placeholder="Masukkan Tanggal Selesai" fdprocessedid="zt264h">
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 p-3">
                                                                                <div class="form-group mb-10">
                                                                                    <label class="required form-label">Tipe<i
                                                                                            class="text-danger">
                                                                                            *</i></label>
                                                                                    <select class="form-select form-select-sm p-2 @error('tipe') is-invalid @enderror"
                                                                                        name="tipe" tabindex="-1"
                                                                                        aria-hidden="true">
                                                                                        <option value="" disabled>Pilih Tipe
                                                                                        </option>
                                                                                        <option value="1" {{ $data->tipe == 'Magang' ? 'selected' : '' }}>Magang
                                                                                        </option>
                                                                                        <option value="2" {{ $data->tipe == 'Kontrak' ? 'selected' : '' }}>Kontrak</option>
                                                                                        <option value="3" {{ $data->tipe == 'Part Time' ? 'selected' : '' }}>Part Time
                                                                                        </option>
                                                                                        <option value="4" {{ $data->tipe == 'Full Time' ? 'selected' : '' }}>Full Time</option>

                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Tutup</button>
                                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                                <form method="POST" action="/cv3/delete/{{ $data->id_pengalaman }}">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger mx-1 my-1"><i class="bi bi-trash-fill"></i> Hapus</button>
                                                </form>
                                                {{--action="/student/delete/{{ $data->nim }}"--}}
                                            </td>
                                            @empty
                                            <td colspan="6" class="text-center">
                                                <h6 class="fw-bolder fs-7">Tidak ada data</h6>
                                            </td>
                                        </tr>

                                    @endforelse
                                    {{-- <tr>
                                        <td colspan="6" class="text-center">
                                            <h6 class="fw-bolder fs-7">Tidak ada data</h6>
                                        </td>
                                    </tr> --}}
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
