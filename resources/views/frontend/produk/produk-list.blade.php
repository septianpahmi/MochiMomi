@include('frontend.layouts.header')
@include('frontend.layouts.navbar')


<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">Products</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item text-dark active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-4">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Our Products</h1>
                </div>
            </div>
            <div class="col-lg-8 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <div class="d-flex align-items-center justify-content-end mb-5">
                    <!-- Kolom Pencarian (Baru) -->
                    <div class="me-3">
                        <div class="input-group">
                            <input type="text" id="search-input" class="form-control border-primary border-2"
                                placeholder="Cari..." aria-label="Search">
                            <button class="btn btn-primary" id="search-button" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-outline-primary filter-btn active" data-kategori="">Semua</button>
                        <button class="btn btn-outline-primary filter-btn" data-kategori="1">Makanan</button>
                        <button class="btn btn-outline-primary filter-btn" data-kategori="2">Minuman</button>
                        <button class="btn btn-outline-primary filter-btn" data-kategori="3">Lainnya</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div id="produk-list">
                    @include('frontend.produk.list', ['produk' => $produk])
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    let kategori = '';
    let keyword = '';

    function loadProduk() {
        $.ajax({
            url: "{{ route('produk.ajax') }}",
            method: "GET",
            data: {
                kategori: kategori,
                search: keyword
            },
            success: function(res) {
                $('#produk-list').html(res);
            },
            error: function(err) {
                alert('Gagal memuat data.');
            }
        });
    }

    $(document).ready(function() {
        // Tombol search
        $('#search-button').on('click', function() {
            keyword = $('#search-input').val();
            loadProduk();
        });

        // Enter key
        $('#search-input').on('keypress', function(e) {
            if (e.which === 13) {
                keyword = $(this).val();
                loadProduk();
            }
        });

        // Klik kategori
        $('.filter-btn').on('click', function() {
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');
            kategori = $(this).data('kategori');
            loadProduk();
        });
    });
</script>

@include('frontend.layouts.footer')
