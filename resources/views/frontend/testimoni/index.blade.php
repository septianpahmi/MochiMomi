@include('frontend.layouts.header')
@include('frontend.layouts.navbar')
<div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-3 animated slideInDown">Testimonial</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-body" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item text-dark active" aria-current="page">Testimonial</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-fluid bg-light bg-icon py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 class="display-5 mb-3">Video Testimonials</h1>
        </div>
        <div class="row g-4">
            @foreach ($data as $item)
                <!-- Testimonial Video 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-video-card bg-white p-4 rounded shadow-sm h-100">
                        <div class="video-container mb-4 ratio ratio-16x9">
                            @if (Str::contains($item->video_link, 'youtube.com/watch'))
                                @php
                                    // Convert ke embed URL
                                    $embed = preg_replace(
                                        '/https:\/\/www\.youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/',
                                        "https://www.youtube.com/embed/$1",
                                        $item->video_link,
                                    );
                                @endphp
                                <iframe src="{{ $embed }}" frameborder="0" allowfullscreen></iframe>
                            @else
                                <iframe src="{{ $item->video_link }}" frameborder="0" allowfullscreen></iframe>
                            @endif
                        </div>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 rounded-circle me-3" src="/images/testimoni/{{ $item->image }}"
                                width="60" height="60" alt="">
                            <div>
                                <h5 class="mb-1">{{ $item->name }}</h5>
                                <span>{{ $item->position }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('frontend.layouts.footer')
