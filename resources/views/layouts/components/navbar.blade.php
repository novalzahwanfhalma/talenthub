<style>
    .dropdown-item.text-white:hover {
        background-color: transparent;
        color: #fff;
    }
</style>
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
                <li><a class="nav-link scrollto" href="/lowongan">Lowongan</a></li>
                <li><a class="nav-link scrollto" href="/student">Mahasiswa</a></li>
                <li><a class="nav-link scrollto" href="/perusahaan">Perusahaan</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <span>
                            <div id="pp" class="mt-0 mb-0 ms-2">
                                <img src="{{ asset('style/assets/img/noval.jpg') }}" class="rounded-circle img-fluid"
                                    style="width: 50px;" />
                            </div>
                        </span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="/mhsprof">
                                <button class="dropdown-item text-white">Profil & CV</button>
                            </form>
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-item text-white" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>

                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>



        <!-- .navbar end-->

    </div>
</header><!-- End Header -->
