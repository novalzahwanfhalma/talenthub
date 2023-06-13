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
                                    <div class="card-title d-flex align-items-center mt-3">
                                        <!-- mt-3 ditambahin utk padding atas-->
                                        <h4 class="fw-bold">
                                            <i class="bi bi-buildings text-dark fs-3 me-1"></i>
                                            Ubah Profil Perusahaan
                                        </h4>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <input type="hidden" name="_token"
                                            value="QzikhfB5RhL9odgFXj3QcGV1vVYpTTwuy43ulwVh">
                                        <div class="row">
                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Nama Perusahaan<i
                                                            class="text-danger"> *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="name" value=""
                                                        placeholder="Masukkan Nama Perusahaan" fdprocessedid="zt264h">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tipe Perusahaan<i
                                                            class="text-danger"> *</i></label>
                                                    <select class="form-select form-select-sm p-2"
                                                        name="company_type_id" placeholder="Pilih Tipe Perusahaan"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="" selected disabled>Pilih Tipe Perusahaan
                                                        </option>
                                                        <option value="10">Badan Usaha Milik Negara (BUMN)</option>
                                                        <option value="11">Lainnya</option>
                                                        <option value="12">Finance</option>
                                                        <option value="1">BUMN</option>
                                                        <option value="2">BUMD</option>
                                                        <option value="3">Pemerintah</option>
                                                        <option value="4">Swasta</option>
                                                        <option value="5">Startup</option>
                                                        <option value="6">Yayasan</option>
                                                        <option value="7">NGO/Non-Profit</option>
                                                        <option value="8">Lainnya</option>
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Sektor Usaha<i
                                                            class="text-danger"> *</i></label>
                                                    <select class="form-select form-select-sm p-2"
                                                        name="company_category_id" tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Sektor Usaha
                                                        </option>
                                                        <option value="1">Apparel, Textile &amp; Fashion</option>
                                                        <option value="2">Automotive &amp; Component</option>
                                                        <option value="3">Banking &amp; Financial Services
                                                        </option>
                                                        <option value="4">Beauty &amp; Wellness</option>
                                                        <option value="5">Building Material &amp; Sanitary
                                                        </option>
                                                        <option value="6">Business Process Outsourcing (BPO)
                                                        </option>
                                                        <option value="7">Candy / Confectionery</option>
                                                        <option value="8">Conglomerate / Holding Company</option>
                                                        <option value="9">Consultancy (Business &amp; Management)
                                                        </option>
                                                        <option value="10">Consulting, Research &amp; Legal
                                                            Services</option>
                                                        <option value="11">Consumer Electronics, Appliance &amp;
                                                            Furnishing</option>
                                                        <option value="12">Ecommerce</option>
                                                        <option value="13">Education &amp; Training</option>
                                                        <option value="14">Electronics Manufacturing</option>
                                                        <option value="15">Engineering, Procurement, Construction
                                                            (EPC)</option>
                                                        <option value="16">Environmental &amp; Facilities Services
                                                        </option>
                                                        <option value="17">Fertilizer &amp; Pesticides</option>
                                                        <option value="18">FMCG</option>
                                                        <option value="19">Food &amp; Beverage</option>
                                                        <option value="20">Government, Non Profit &amp; Public
                                                            Facilities</option>
                                                        <option value="21">Healthcare &amp; Pharmaceutical</option>
                                                        <option value="22">Heavy Equipment &amp; Industrial
                                                            Machinery</option>
                                                        <option value="23">Hospitality, Travel &amp; Tourism
                                                        </option>
                                                        <option value="24">Industrial Goods &amp; Chemical</option>
                                                        <option value="25">Insurance</option>
                                                        <option value="26">IT &amp; Telecommunication</option>
                                                        <option value="27">Jewellry &amp; Luxury Goods</option>
                                                        <option value="28">Leather</option>
                                                        <option value="29">Manufaktur</option>
                                                        <option value="30">Mechanical / Electrical</option>
                                                        <option value="31">Media, Entertainment &amp; Advertising
                                                        </option>
                                                        <option value="32">Mining, Oil &amp; Gas</option>
                                                        <option value="33">Natural Resources Processing</option>
                                                        <option value="34">Natural Resources, Others</option>
                                                        <option value="35">Not specified</option>
                                                        <option value="36">Other Manufacturers</option>
                                                        <option value="37">Other Services</option>
                                                        <option value="38">Paper &amp; Forestry Product</option>
                                                        <option value="39">Printing &amp; Publishing</option>
                                                        <option value="40">Printing and Packaging</option>
                                                        <option value="41">Real Estate &amp; Property</option>
                                                        <option value="42">Removals</option>
                                                        <option value="43">Restaurant &amp; Food Services</option>
                                                        <option value="44">Retail &amp; Wholesale Trading</option>
                                                        <option value="45">Science &amp; Technology</option>
                                                        <option value="46">Shipping</option>
                                                        <option value="47">Shoes</option>
                                                        <option value="48">Tobacco &amp; Cigarettes</option>
                                                        <option value="49">Trading</option>
                                                        <option value="50">Transportation &amp; Logistic</option>
                                                        <option value="51">Utilities &amp; Energy</option>

                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Jumlah Pegawai<i
                                                            class="text-danger"> *</i></label>
                                                    <select class="form-select form-select-sm p-2"
                                                        name="company_volume_id" tabindex="-1" aria-hidden="true">
                                                        <option value="" disabled selected>Pilih Jumlah Pegawai
                                                        </option>
                                                        <option value="1">1-10</option>
                                                        <option value="3">51-100</option>
                                                        <option value="4">101-500</option>
                                                        <option value="5">501-1000</option>
                                                        <option value="6">1001-5000</option>
                                                        <option value="7">5001-10000</option>
                                                        <option value="8">10001-50000</option>
                                                        <option value="2">10-50</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Tentang Perusahaan<i
                                                            class="text-danger"> *</i></label>
                                                    <textarea class="form-control form-control-sm p-2" name="about" placeholder="Tentang Perusahaan"
                                                        style="height: 100px">
                                                        </textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Provinsi<i class="text-danger">
                                                            *</i></label>
                                                    <select class="form-select form-select-sm p-2" name="province_id"
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
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Kota / Kabupaten</label>
                                                    <select class="form-select form-select-sm p-2" name="city_id"
                                                        tabindex="-1" aria-hidden="true">
                                                        <option value="88" disabled selected>Pilih Kota / Kabupaten
                                                        </option>
                                                        <option value="88">Kab. Karimun</option>
                                                        <option value="89">Kab. Bintan (Kep. Riau)</option>
                                                        <option value="90">Kab. Lingga</option>
                                                        <option value="91">Kab. Natuna</option>
                                                        <option value="92">Kab. Kep. Anambas</option>
                                                        <option value="93">Kota Tanjungpinang</option>
                                                        <option value="94">Kota Batam</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-12 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Alamat Perusahaan<i
                                                            class="text-danger"> *</i></label>
                                                    <textarea class="form-control form-control-sm p-2" name="address" placeholder="Alamat Perusahaan"
                                                        style="height: 100px">
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
                                                        name="email" value=""
                                                        placeholder="Masukkan Email Perusahaan" fdprocessedid="9fbpx">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Nomor Telepon<i
                                                            class="text-danger"> *</i></label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="phone" value=""
                                                        placeholder="Masukkan Nomor Telephone Perusahaan"
                                                        fdprocessedid="c3jxsr">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="required form-label">Website</label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="website" value=""
                                                        placeholder="Masukkan Website Perusahaan"
                                                        fdprocessedid="89ik">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Username Facebook</label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="facebook" value=""
                                                        placeholder="Masukkan Username Facebook"
                                                        fdprocessedid="1pkjhm">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Username Instagram</label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="instagram" value=""
                                                        placeholder="Masukkan Username Instagram"
                                                        fdprocessedid="qqkzh9">
                                                </div>
                                            </div>

                                            <div class="col-lg-4 p-3">
                                                <div class="form-group mb-10">
                                                    <label class="form-label">Username Twitter</label>
                                                    <input type="text" class="form-control form-control-sm p-2"
                                                        name="twitter" value=""
                                                        placeholder="Masukkan Username Twitter"
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
                                                    Submit Perubahan
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
