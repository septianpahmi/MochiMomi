<div class="row g-4">
    @forelse ($produk as $item)
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                    <img class="img-fluid w-100" src="/images/produk/{{ $item->image }}"
                        style="height: 350px; object-fit: cover;">
                </div>
                <div class="text-center p-4">
                    <a class="d-block h5 mb-2"
                        href="{{ route('produk.detail', $item->slug) }}">{{ Str::limit($item->name, 15) }}</a>
                    <span class="text-primary">Rp. {{ number_format($item->price, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center">Produk tidak ditemukan.</div>
    @endforelse
</div>
