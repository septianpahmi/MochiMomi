<!-- Feature Start -->
<div class="container-fluid bg-light bg-icon my-5 py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Visi Misi</h1>
        </div>
        <div class="flex flex-wrap justify-center gap-4 mb-4">
            @if ($visi == null)
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">VISI</h4>
                        <p class="mb-4">Belum ada visi</p>
                        <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Misi</h4>
                        <p class="mb-4">Belum ada misi</p>
                        <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                    </div>
                </div>
            @else
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">VISI</h4>
                        <p class="mb-4">{{ $visi->vision }}</p>
                        <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Misi</h4>
                        <p class="mb-4">{{ $visi->mission }}</p>
                        <!-- <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Read More</a> -->
                    </div>
                </div>
            @endif

        </div>
        <div class="flex flex-wrap justify-center gap-4">
            <div class="container">
                <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Kenapa Kami</h1>
                </div>
                <div class="row g-4">
                    @foreach ($whyus as $item)
                        @if ($item == null)
                            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="bg-white text-center h-100 p-4 p-xl-5">
                                    <img class="img-fluid mb-4" src="img/ask.png" alt="">
                                    <h4 class="mb-3">Belum ada konten</h4>
                                    <p class="mb-4">Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam
                                        justo sed vero dolor duo.</p>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="bg-white text-center h-100 p-4 p-xl-5">
                                    <img class="img-fluid mb-4" src="img/ask.png" alt="">
                                    <h4 class="mb-3">{{ $item->title }}</h4>
                                    <p class="mb-4">{{ $item->content }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->
