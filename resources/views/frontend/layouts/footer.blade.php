<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        @if ($kontak == null)
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Mochi<span class="text-secondary">Momi</span></h1>
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                        stet lorem sit clita</p>
                    <div class="d-flex flex-wrap gap-2 pt-2">
                        <!--<a class="btn btn-sm btn-square btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;" href="{{ $kontak->twitter }}"><i class="fab fa-twitter"></i></a>-->
                            <a class="btn btn-sm btn-square btn-outline-light rounded-circle d-flex align-items-center justify-content-center" 
                               style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm btn-square btn-outline-light rounded-circle d-flex align-items-center justify-content-center" 
                               style="width: 36px; height: 36px;" href="#"><i class="fab fa-youtube"></i></a>
                            <!-- <a class="btn btn-sm btn-square btn-outline-light rounded-circle d-flex align-items-center justify-content-center" 
                               style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Contact</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>-</p>
                    <p><i class="fa fa-phone-alt me-3"></i>-</p>
                    <p><i class="fa fa-envelope me-3"></i>-</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ route('home') }}">Home</a>
                    <a class="btn btn-link" href="{{ route('produk-list') }}">Produk</a>
                    <a class="btn btn-link" href="{{ route('blog.user') }}">Kegiatan</a>
                    <a class="btn btn-link" href="{{ route('testimoni') }}">Testimonial</a>
                    <a class="btn btn-link" href="{{ route('about.user') }}">About Us</a>
                    <a class="btn btn-link" href="{{ route('contact.user') }}">Contact Us</a>
                </div>
            </div>
        @else
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Mochi<span class="text-secondary">Momi</span></h1>
                    <!--<p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed-->
                    <!--    stet lorem sit clita</p>-->
                        <div class="d-flex flex-wrap gap-2 pt-2">
                            <!--<a class="btn btn-sm btn-square btn-outline-light rounded-circle d-flex align-items-center justify-content-center" -->
                            <!--   style="width: 36px; height: 36px;" href="{{ $kontak->twitter }}"><i class="fab fa-twitter"></i></a>-->
                            <a class="btn btn-sm btn-square btn-outline-light rounded-circle d-flex align-items-center justify-content-center" 
                               style="width: 36px; height: 36px;" href="{{ $kontak->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm btn-square btn-outline-light rounded-circle d-flex align-items-center justify-content-center" 
                               style="width: 36px; height: 36px;" href="{{ $kontak->youtube }}"><i class="fab fa-youtube"></i></a>
                            <!-- <a class="btn btn-sm btn-square btn-outline-light rounded-circle d-flex align-items-center justify-content-center" 
                               style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Contact</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>{{ $kontak->address }}</p>
                    <p><i class="fa fa-phone-alt me-3"></i>{{ $kontak->phone }}</p>
                    <p><i class="fa fa-envelope me-3"></i>{{ $kontak->email }}</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ route('home') }}">Home</a>
                    <a class="btn btn-link" href="{{ route('produk-list') }}">Produk</a>
                    <a class="btn btn-link" href="{{ route('blog.user') }}">Kegiatan</a>
                    <a class="btn btn-link" href="{{ route('testimoni') }}">Testimonial</a>
                    <a class="btn btn-link" href="{{ route('about.user') }}">About Us</a>
                    <a class="btn btn-link" href="{{ route('contact.user') }}">Contact Us</a>
                </div>
            </div>
        @endif
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">CocodeTechWorks</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="#">CocodeTechWork</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary rounded-circle back-to-top d-flex align-items-center justify-content-center"
   style="width: 45px; height: 45px;">
    <i class="bi bi-arrow-up"></i>
</a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.delete').click(function() {
        var dataid = $(this).attr('data-id');
        var url = $(this).attr('url')
        Swal.fire({
            title: "Anda Yakin?",
            text: "Setelah dihapus, Anda tidak akan dapat memulihkan data ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "" + url + ""

            }

        });
    });
</script>

<script>
    $('.status').click(function() {
        var dataid = $(this).attr('data-id');
        var url = $(this).attr('url')
        Swal.fire({
            title: "Anda Yakin?",
            text: "Setelah dirubah, Anda tidak akan dapat memulihkan data ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, change it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "" + url + ""

            }

        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if (Session::has('success'))
        Swal.fire({
            title: "Berhasil!",
            text: "{{ Session::get('success') }}",
            icon: "success"
        });
    @endif
    @if (Session::has('error'))
        toastr.options.closeButton = true;
        toastr.error("{{ Session::get('error') }}", 'Gagal!')
    @endif
</script>

</body>

</html>
