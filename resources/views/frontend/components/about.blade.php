<!-- About Start -->
@if ($sejarah == null)
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/contoh.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Sejarah Komunitas</h1>
                    <p class="mb-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                        mollitia.
                        Aliquid est doloremque provident doloribus velit, nisi quos repellat voluptatum ipsum laboriosam
                        alias asperiores consectetur? Nihil ab sequi nostrum autem voluptas quis accusantium ad,
                        voluptatibus, hic non distinctio vel nisi?</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                    <!-- <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
@else
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="/images/sejarah/{{ $sejarah->image }}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">{{ $sejarah->title }}</h1>
                    <p class="mb-4">{{ $sejarah->content }}</p>
                    {{-- <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p> --}}
                    <!-- <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
@endif

<!-- About End -->
