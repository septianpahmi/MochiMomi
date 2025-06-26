<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Produk Terlaris</h1>
                    <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor
                        duo.</p>
                </div>
            </div>

        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    @foreach ($product as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img style="height: 350px; object-position: center; object-fit: cover;"
                                        class="img-fluid w-100" src="/images/produk/{{ $item->image }}" alt="">
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5"
                                        href="{{ route('produk.detail', $item->slug) }}">{{ $item->name }}</a>

                                    <span
                                        class="text-primary me-1">{{ 'Rp.' . ' ' . number_format($item->price, 0, ',', '.') }}</span>
                                    <!-- <span class="text-body text-decoration-line-through">$29.00</span> -->
                                </div>
                                <div class="d-flex border-top">
                                    <small class="w-100 text-center py-2">
                                        <a class="text-body" href="{{ route('produk.detail', $item->slug) }}"><i
                                                class="fa fa-eye text-primary me-2"></i>Lihat
                                            detail</a>
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('produk-list') }}">Browse More
                            Products</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Product End -->
