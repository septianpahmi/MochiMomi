<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <div class="row no-gutters text-center">
            <div class="col-12">
                <span class="brand-text font-weight-bold" style="font-size: 28px; line-height: 1.1">DASHBOARD</span>
            </div>
            <div class="col-12">
                <span class="brand-text font-weight-light" style="font-size: 20px; line-height: 1.1">UMKN Mochi
                    Momi</span>
            </div>
        </div>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link{{ request()->routeIs('dashboard') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MASTER DATA</li>
                <li class="nav-item">
                    <a href="{{ route('kategori') }}"
                        class="nav-link{{ request()->routeIs('kategori') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user') }}" class="nav-link{{ request()->routeIs('user') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Manajemen User
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item{{ request()->routeIs(['sejarah', 'visi-misi', 'kontak', 'why-us']) ? ' menu-open' : '' }}">
                    <a href="#"
                        class="nav-link{{ request()->routeIs(['sejarah', 'visi-misi', 'kontak', 'why-us']) ? ' active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            About
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('sejarah') }}"
                                class="nav-link{{ request()->routeIs(['sejarah']) ? ' active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sejarah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('visi-misi') }}"
                                class="nav-link{{ request()->routeIs(['visi-misi']) ? ' active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visi & Misi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kontak') }}"
                                class="nav-link{{ request()->routeIs(['kontak']) ? ' active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kontak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('why-us') }}"
                                class="nav-link{{ request()->routeIs(['why-us']) ? ' active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Why Us</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MAIN DATA</li>
                <li class="nav-item">
                    <a href="{{ route('produk') }}"
                        class="nav-link{{ request()->routeIs('produk') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-tag"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('transaksi') }}"
                        class="nav-link{{ request()->routeIs('transaksi') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Transaksi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link{{ request()->routeIs('blog') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Galeri
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('testimoni') }}"
                        class="nav-link{{ request()->routeIs('testimoni') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-quote-right"></i>
                        <p>
                            Testimoni
                        </p>
                    </a>
                </li>
                <li class="nav-header">ETC</li>
                <li class="nav-item">
                    <a href="{{ route('feedback') }}"
                        class="nav-link{{ request()->routeIs('feedback') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Feedback
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
