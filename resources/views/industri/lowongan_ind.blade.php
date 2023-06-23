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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">

</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts/components/navbarind')
    <!-- End Header -->
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
                                        <th class="min-w-500px">Judul</th>
                                        <th class="min-w-150px">Daya Tampung</th>
                                        <th class="min-w-200px">Tanggal Buka</th>
                                        <th class="min-w-200px">Tanggal Tutup</th>
                                        <th class="min-w-100px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($lowongan as $index => $data)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $data->judul }}</td>
                                            <td>{{ $data->daya_tampung }}</td>
                                            <td>{{ $data->tanggal_buka }}</td>
                                            <td>{{ $data->tanggal_tutup }}</td>

                                            <td>
                                                <a href="/lowongan/edit_lowongan/{{ $data->id_lowongan }}" class="btn btn-sm btn-warning mx-1 my-1">
                                                    <i class="bi bi-search"></i>  Edit</a>
                                                    {{--href="/student/edit/{{ $data->nim }}"--}}

                                                <form method="POST" action="inputind/delete/{{ $data->id_lowongan }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger mx-1 my-1"><i class="bi bi-trash-fill"></i>  Hapus</button>
                                                </form>
                                                {{-- action="/student/delete/{{ $data->nim }}" --}}
                                                {{-- MODAL UNTUK PREVIEW --}}
                                            </td>

                                            @empty
                                            <td colspan="6" class="text-center">
                                                <h6 class="fw-bolder fs-7">Tidak ada data</h6>
                                            </td>
                                        </tr>

                                    @endforelse
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>
    @if (session('notifikasi'))
        <script>
            Swal.fire({
                text: '{{ session('notifikasi') }}',
                icon: '{{ session('type') }}',
                confirmButtonText: 'OK',
                timer: 2000,
            });
        </script>
    @endif



    @stack('body')

</body>

</html>
