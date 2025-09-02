@include('frontend.layouts.header')
@include('frontend.layouts.navbar')
<div class="py-5">

</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Gambar Produk -->
            <div class="col-lg-6">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="/images/produk/{{ $produk->image }}">
                </div>
            </div>

            <!-- Detail Produk -->
            <div class="col-lg-6">
                <h1 class="display-5 mb-2">{{ $produk->name }}</h1>
                <div class="row">
                    <div class="col-6 text-start">
                        <p class="mb-2 fw-bold text-danger fs-5">
                            Rp. {{ number_format($produk->price, 0, ',', '.') }}
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <p class="mb-2 fw-bold fs-5">{{ $produk->brand_name }}</p>
                    </div>
                </div>
                <!-- Varian, Rasa, Berat -->
                <div class="mb-3">
                    <p><strong>Varian:</strong> {{ $produk->variant }}</p>
                    <p><strong>Rasa:</strong> {{ $produk->flavor }}</p>
                    <p><strong>Berat:</strong> {{ $produk->weight }} Gram</p>
                </div>
                <!-- Deskripsi -->
                <div class="mb-4">
                    <h6><strong>Deskripsi:</strong></h6>
                    <p class="text-justify">{{ $produk->description }}</p>
                </div>
                <!-- Quantity -->
                <div class="d-flex align-items-center mb-4" style="max-width: 200px;">
                    <button class="btn btn-outline-primary" id="btn-minus">-</button>
                    <input type="text" id="quantity" class="form-control text-center mx-2" value="1" readonly>
                    <button class="btn btn-outline-primary" id="btn-plus">+</button>
                </div>
                <!-- Tombol Beli -->
                <button class="btn btn-primary w-100 rounded-pill py-3 px-5" id="buy-button">
                    Beli
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const minusBtn = document.getElementById('btn-minus');
        const plusBtn = document.getElementById('btn-plus');
        const qtyInput = document.getElementById('quantity');
        const buyBtn = document.getElementById('buy-button');

        let quantity = 1;

        minusBtn.addEventListener('click', () => {
            if (quantity > 1) {
                quantity--;
                qtyInput.value = quantity;
            }
        });

        plusBtn.addEventListener('click', () => {
            quantity++;
            qtyInput.value = quantity;
        });

        buyBtn.addEventListener('click', () => {
            const productName = @json($produk->name);
            const productId = {{ $produk->id }};
            const productPrice = {{ $produk->price }};
            const totalPrice = quantity * productPrice;
            const formattedPrice = new Intl.NumberFormat('id-ID').format(totalPrice);
            const imageUrl = `{{ url('/images/produk/' . $produk->image) }}`;
            const phone = '{{ $kontak->whatsapp ?? '6281234567890' }}';
        
            // Buat pesan WhatsApp (pakai \n biasa lalu encode)
            const message =
            `Halo, saya ingin membeli produk:%0A%0A` +
            `*${productName}*%0A` +
            `Jumlah: ${quantity}%0A` +
            `Total: Rp ${formattedPrice}%0A%0A`;

const whatsappURL = `https://api.whatsapp.com/send?phone=${phone}&text=${message}`;
        
            // Debug (opsional)
            console.log("WA Link:", whatsappURL);
        
            // Simpan ke server (jika perlu)
            fetch("/home/produk-detail/checkout", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: quantity,
                    wa_link: whatsappURL,
                })
            }).then(res => res.json())
              .then(res => {
                if (res.success) {
                    window.open(whatsappURL, '_blank');
                } else {
                    alert("Gagal menyimpan transaksi.");
                }
              }).catch(() => {
                alert("Terjadi kesalahan. Silakan coba lagi.");
              });
        });

    });
</script>
@include('frontend.layouts.footer')
