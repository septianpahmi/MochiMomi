<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <!-- TOP BAR -->
        <div class="top-bar row gx-0 align-items-center text-light py-2 px-3 d-none d-lg-flex">
            @if ($kontak == null)
                <div class="col-lg-6 text-start">
                    <small><i class="fa fa-map-marker-alt me-2"></i>-</small>
                    <small class="ms-4"><i class="fa fa-envelope me-2"></i>-</small>
                </div>
                <div class="col-lg-6 text-end">
                    <small>Follow us:</small>
                    <a class="text-light ms-3" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-light ms-3" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="text-light ms-3" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            @else
                <div class="col-lg-6 text-start">
                    <small><i class="fa fa-map-marker-alt me-2"></i>{{ $kontak->address }}</small>
                    <small class="ms-4"><i class="fa fa-envelope me-2"></i>{{ $kontak->email }}</small>
                </div>
                <div class="col-lg-6 text-end">
                    <small>Follow us:</small>
                    <a class="text-light ms-3" href="{{ $kontak->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <!--<a class="text-light ms-3" href="{{ $kontak->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>-->
                    <a class="text-light ms-3" href="{{ $kontak->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            @endif
        </div>

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-2 px-3 px-lg-5 shadow-sm">
            <div class="container-fluid">
                <!-- Logo utama -->
                <a href="{{ route('home') }}" class="navbar-brand me-2">
                    <img src="img/logomoci.png" alt="Logo Moci" style="height: 50px; width: auto;">
                </a>

                <!-- Logo tambahan (UNPI, KM, dll) -->
                <div class="d-none d-md-flex align-items-center gap-2">
                    <img src="https://unpi-cianjur.ac.id/assets/images/logo_unpi_9a3.png" alt="Logo UNPI" style="height: 40px;">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEihIRtaGx4HTrkvhOceXgbEe32L8R23e3wztDLFEsAVXuIeMGD6JR1g7mBClPd5w5Zk4HEvN-OkePxDSYzw4MzsF9QG7yh5w2Tg3t6fotSdCSPIgZ4X7KRWj6-IW-hqD_aeTufLJ0tt7DB8U8-jTyDaUBr7_wOR5L04SixHZ0ytLDOTzZe5D3YV5XDw/s2953/Logo%20Kampus%20Merdeka%20Indonesia%20Jaya_Thumnail.png" alt="Logo Kampus Merdeka" style="height: 40px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg/1200px-Logo_of_Ministry_of_Education_and_Culture_of_Republic_of_Indonesia.svg.png" alt="Logo Kemendikbud" style="height: 40px;">
                </div>

                <!-- Toggle menu button for mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation links -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-3 py-lg-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active" style="color: #800000;"><b>Home</b></a>
                        <a href="{{ route('produk-list') }}" class="nav-item nav-link" style="color: #800000;"><b>Products</b></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: #800000;"><b>Pages</b></a>
                            <div class="dropdown-menu bg-white shadow">
                                <a href="{{ route('testimoni.user') }}" class="dropdown-item" style="color: #800000;"><b>Testimonial</b></a>
                                <a href="{{ route('blog.user') }}" class="dropdown-item" style="color: #800000;"><b>Kegiatan</b></a>
                                <a href="{{ route('about.user') }}" class="dropdown-item" style="color: #800000;"><b>About Us</b></a>
                            </div>
                        </div>
                        <a href="{{ route('contact.user') }}" class="nav-item nav-link" style="color: #800000;"><b>Contact</b></a>
                    </div>

                    <!-- Auth button -->
                    <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center gap-2 ms-lg-3">
                        @if (Auth::check())
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: #800000;"><b>{{ Str::limit(Auth::user()->name, 10) }}</b></a>
                                <div class="dropdown-menu m-0">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="dropdown-item" style="color: #800000;"
                                            onclick="event.preventDefault(); this.closest('form').submit();"><b>Logout</b></a>
                                    </form>
                                </div>
                            </div>
                        @else
                            <a class="btn btn-outline-primary border-2 py-1 px-3 rounded-pill" href="{{ route('login') }}">Masuk</a>
                            <a class="btn btn-outline-primary border-2 py-1 px-3 rounded-pill" href="{{ route('register') }}">Daftar</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </div>
   
