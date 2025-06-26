@include('frontend.layouts.header')
@include('frontend.layouts.navbar')
<div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">Kegiatan Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item text-dark active" aria-current="page">Kegiatan Kami</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-xxl py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 class="display-5 mb-3">Kegiatan Kami</h1>
        </div>
        <div class="row g-4">
            @foreach ($blog as $blogs)
                @if ($blogs == null)
                    <p>Data Tidak Ditemukan</p>
                @else
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid" src="/images/blog/{{ $blogs->image }}" alt="">
                        <div class="bg-light p-4">
                            <a class="d-block h5 lh-base mb-4" href="#">{{ $blogs->title }}</a>
                            <div class="text-muted border-top pt-4">
                                <small class="me-3"><i
                                        class="fa fa-user text-primary me-2"></i>{{ $blogs->user->name }}</small>
                                <small class="me-3"><i
                                        class="fa fa-calendar text-primary me-2"></i>{{ Carbon\Carbon::parse($blogs->created_at)->translatedFormat('d F, Y') }}</small>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
</div>
@include('frontend.layouts.footer')
