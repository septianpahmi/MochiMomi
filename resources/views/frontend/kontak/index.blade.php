@include('frontend.layouts.header')
@include('frontend.layouts.navbar')
<div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item text-dark active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-xxl py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 class="display-5 mb-3">Contact Us</h1>
        </div>
        <div class="row g-5 justify-content-center">
            <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                    <h5 class="text-white">Call Us</h5>
                    <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>{{ $kontak->phone ?? '-' }}</p>
                    <h5 class="text-white">Email Us</h5>
                    <p class="mb-5"><i class="fa fa-envelope me-3"></i>{{ $kontak->email ?? '-' }}</p>
                    <h5 class="text-white">Office Address</h5>
                    <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>{{ $kontak->address ?? '-' }}</p>
                    <!--<h5 class="text-white">Follow Us</h5>-->
                    <!--<div class="d-flex pt-2">-->
                    <!--    <a class="btn btn-square btn-outline-light rounded-circle me-1"-->
                    <!--        href="{{ $kontak->twitter ?? '#' }}"><i class="fab fa-twitter"></i></a>-->
                    <!--    <a class="btn btn-square btn-outline-light rounded-circle me-1"-->
                    <!--        href="{{ $kontak->facebook ?? '#' }}"><i class="fab fa-facebook-f"></i></a>-->
                    <!--    <a class="btn btn-square btn-outline-light rounded-circle me-1"-->
                    <!--        href="{{ $kontak->youtube ?? '#' }}"><i class="fab fa-youtube"></i></a>-->
                    <!--    <a class="btn btn-square btn-outline-light rounded-circle me-0"-->
                    <!--        href="{{ $kontak->linkedin ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{ route('contact.send') }}" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" value="{{ Auth::user()->name ?? '' }}"
                                    id="name" name="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email"
                                    value="{{ Auth::user()->email ?? '' }}" name="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 200px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('frontend.layouts.footer')
