@extends('frontend.partials.main')

@section('content')
        <!-- Carousel Start -->
        <div class="container-fluid carousel px-0 mb-5 pb-5">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h4 class="text-white mb-4 animated slideInDown">No 1 Cleaning Services and Maid Distributors</h4>
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Enjoy Your Home Totally Clean</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h4 class="text-white mb-4 animated slideInDown">No 1 Cleaning Services and Maid Distributors</h4>
                                <h1 class="text-white display-1 mb-4 animated slideInDown">Enjoy Your Home Totally Clean</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End --> 


        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Workers</h5>
                    <h1 class="display-5">Our Recommendation Workers</h1>
                </div>
                <div class="row g-5">
                    @foreach ($pekerjas->take(4) as $pekerja)
                    <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="rounded team-item">
                            <a href="{{ route('detail-pekerja', ['id' => $pekerja->id]) }}">
                            <img src="{{ asset('uploads/foto_pekerja/' . $pekerja->foto_pekerja) }}" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                            </a>
                            <div class="team-content bg-primary text-dark text-center py-3">
                                <span class="fs-4 fw-bold">{{ $pekerja->nama_pekerja }}</span>
                                <p class="text-muted mb-0">Rp {{ number_format($pekerja->gaji, 0, ',', '.') }}/Month</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- Project Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Services</h5>
                    <h1 class="display-5">Our New Services</h1>
                </div>
                <div class="row g-5">
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-left bg-dark"></div>
                            <div class="project-right bg-dark"></div>
                            <img src="img/project-1.jpg" class="img-fluid h-100" alt="img">
                            <a href="" class="text-center" style="width : 200px; height : 190px">Daily Cleaning
                              Meliputi sapu & pel, cuci piring, cuci kamar mandi, lap debu. Peralatan disediakan customer. Price : Rp 350.000
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-left bg-dark"></div>
                            <div class="project-right bg-dark"></div>
                            <img src="img/ironing.jpg" class="img-fluid h-100" alt="img">
                            <a href="" class="text-center" style="width : 200px; height : 180px">Ironing
                                Setrika pakaian. 30 pakaian/jam. Setrika disediakan customer. Price : Rp 100.000
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-left bg-dark"></div>
                            <div class="project-right bg-dark"></div>
                            <img src="img/project-3.jpg" class="img-fluid h-100" alt="img">
                            <a href="" class="text-center" style="width : 200px; height : 180px">Cleaning with Tools
                                Meliputi sapu & pel, cuci piring, cuci kamar mandi, lap debu. Peralatan disediakan Mitra. Price : Rp 550.000
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project End -->


                <!-- Testiminial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Testimonial</h5>
                    <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam quis tempor.</p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0">Client Name</h4>
                                <p class="mb-1">Profession</p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testiminial End -->
@endsection
