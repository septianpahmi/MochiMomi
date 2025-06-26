<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            @if ($kontak == null)
                <div class="col-lg-6 px-5 text-start">
                    <small style="color: antiquewhite;"><i class="fa fa-map-marker-alt me-2"></i>-</small>
                    <small style="color: antiquewhite;" class="ms-4"><i class="fa fa-envelope me-2"></i>-</small>
                </div>
                <div class="col-lg-6 px-5 text-end">
                    <small>Follow us:</small>
                    <a class="text-body ms-3" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-body ms-3" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="text-body ms-3" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            @else
                <div class="col-lg-6 px-5 text-start">
                    <small style="color: antiquewhite;"><i
                            class="fa fa-map-marker-alt me-2"></i>{{ $kontak->address }}</small>
                    <small style="color: antiquewhite;" class="ms-4"><i
                            class="fa fa-envelope me-2"></i>{{ $kontak->email }}</small>
                </div>
                <div class="col-lg-6 px-5 text-end">
                    <small>Follow us:</small>
                    <a class="text-body ms-3" href="{{ $kontak->facebook }}" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="text-body ms-3" href="{{ $kontak->twitter }}" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                    <a class="text-body ms-3" href="{{ $kontak->instagram }}" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                </div>
            @endif

        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <img src="img/logomoci.png" alt="Logo Moci" style="width: 50%; height: auto;">
                <!-- <h1 class="fw-bold text-primary m-0">UMKM Mochi<span class="text-secondary">Momi</span></h1> -->
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link active"
                        style="color: #800000;"><b>Home</b></a>
                    <!-- <a href="about.html" class="nav-item nav-link"style="color: #800000;"><b>About Us</b></a> -->
                    <a href="{{ route('produk-list') }}" class="nav-item nav-link"
                        style="color: #800000;"><b>Products</b></a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown"style="color: #800000;"><b>Pages</b></a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('testimoni.user') }}"
                                class="dropdown-item"style="color: #800000;"><b>Testimonial</b></a>
                            <a href="{{ route('blog.user') }}"
                                class="dropdown-item"style="color: #800000;"><b>Kegiatan</b></a>
                            <a href="{{ route('about.user') }}" class="dropdown-item" style="color: #800000;"><b>About
                                    Us</b></a>
                        </div>
                    </div>
                    <a href="{{ route('contact.user') }}"
                        class="nav-item nav-link"style="color: #800000;"><b>Contact</b></a>

                </div>
                <div class="d-none d-lg-flex ms-2">
                    @if (Auth::check())
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown"style="color: #800000;"><b>{{ Str::limit(Auth::user()->name, 10) }}</b></a>
                            <div class="dropdown-menu m-0">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="route('logout')" class="dropdown-item"style="color: #800000;"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();"><b>Logout</b></a>
                                </form>
                            </div>
                        </div>
                    @else
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill ms-3"
                            href="{{ route('login') }}">Masuk</a>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill ms-3"
                            href="{{ route('register') }}">Daftar</a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
