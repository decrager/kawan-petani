@extends('layouts.app')

@section('main-content')
<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h1 class="display-1 text-white mb-3 animated slideInDown">Kawan Petani Kopi</h1>
                                {{-- <h4 class="text-white mb-5 animated slideInDown">Sebuah perusahaan yang bergerak dalam bidang pertanian kopi</h4> --}}
                                <a href="{{ route('about') }}" class="btn btn-primary py-sm-3 px-sm-4">Jelajahi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-1 text-white mb-3 animated slideInDown">Kawan Petani Kopi</h1>
                                {{-- <h4 class="text-white mb-5 animated slideInDown">Membina Petani Kopi di Indonesia dan meningkatkan kesejahteraan Petani Kopi</h4> --}}
                                <a href="{{ route('about') }}" class="btn btn-primary py-sm-3 px-sm-4">Jelajahi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- Top Feature Start -->
<div class="container-fluid top-feature py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 275px;">
                    <div class="d-flex">
                        {{-- <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-question text-primary"></i>
                        </div> --}}
                        <div class="ps-3 text-center">
                            <h3>PT. BOGOR KOPI INDONESIA</h3>
                            <span style="font-size: 20px">Sebuah perusahaan yang bergerak dalam bidang pertanian kopi. Indonesia adalah salah satu negara penghasil kopi terbesar di dunia dan berpotensi untuk menjadi yang terbesar. Untuk mencapai target tersebut, perlu disiapkan petani-petani sebagai tulang punggung produksi kopi yang dimulai dari petani. Selama ini, banyak pengembangan terkait kopi yang berfokus kepada teknik pertanian, namun sedikit yang fokus membangun sumber daya manusia dalam industri pertanian. Kami mendirikan PT. BOGOR KOPI INDONESIA dengan tujuan tersebut, yaitu untuk membina Petani Kopi di Indonesia dan meningkatkan kesejahteraan Petani Kopi.</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>Dedicated Team</h4>
                            <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-phone text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <h4>24/7 Available</h4>
                            <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Top Feature End -->


<!-- About Start -->
<div class="container-xxl pb-5">
    <div class="container">
        <div class="row g-5 align-items-end">
            <div class="col-lg-6 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" data-wow-delay="0.1s" src="{{ asset('img/about.jpg') }}">
            </div>
            <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-1 text-primary mb-0">7</h1>
                <p class="text-primary mb-4">Years of Experience</p>
                <h1 class="display-5 mb-4">How we started</h1>
                <p class="mb-4" style="font-size: 20px">Perjalanan kami berawal dari pertemuan yang tak disengaja dengan petani kopi saat melakukan kegiatan sosial di desa Tanjung Sari, Kabupaten Bogor. Disana kami mendengar keluh kesah petani kopi dan kemudian memutuskan untuk membantu dengan membeli kopi hasil panen.</p>
                <a class="btn btn-primary py-3 px-4" href="{{ route('ourStory') }}">Jelajahi</a>
            </div>
            {{-- <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-5">
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-award fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Award Winning</h4>
                            <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-users fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Dedicated Team</h4>
                            <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</span>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="{{ asset('img/background-1.jpg') }}">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                <span class="fs-5 fw-semi-bold text-light">Happy Clients</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                <span class="fs-5 fw-semi-bold text-light">Garden Complated</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                <span class="fs-5 fw-semi-bold text-light">Dedicated Staff</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                <span class="fs-5 fw-semi-bold text-light">Awards Achieved</span>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Features Start -->
<div class="container-xxl py-2">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">What we've done?</p>
                <h1 class="display-5 mb-4">Petani Binaan</h1>
                <p class="mb-4" style="font-size: 20px">Program Pembinaan <b>On Farm</b> meliputi: Pemupukan pohon kopi, Pemangkasan pohon, Pembersihan lahan, Pemetikan buah kopi (proses panen) dan proses <b>Off Farm</b> meliputi: Pengolahan buah, Penjemuran, Proses pengelupasan (Huller), Proses sortir (Grading)</p>
                {{-- <a class="btn btn-primary py-3 px-4" href="">Explore More</a> --}}
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                        <i class="fa fa-users fa-3x text-primary"></i>
                                    </div>
                                    <h4 class="mb-0">300+ Petani</h4>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                        <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                                    </div>
                                    <h4 class="mb-0">8 Kabupaten Bogor</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-tools fa-3x text-primary"></i>
                            </div>
                            <h4 class="mb-0">Peralatan Modern</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Service Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Our Services</p>
            <h1 class="display-5 mb-5">Services That We Offer For You</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="img/service-1.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Landscaping</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="img/service-2.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img/icon/icon-6.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Pruning plants</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="img/service-3.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img/icon/icon-5.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Irrigation & Drainage</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="img/service-4.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img/icon/icon-4.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Garden Maintenance </h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="img/service-5.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img/icon/icon-8.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Green Technology</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="img/service-6.jpg" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon">
                        </div>
                        <h4 class="mb-3">Urban Gardening</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Service End -->


<!-- Quote Start -->
<div class="container-fluid quote my-5 py-5" data-parallax="scroll" data-image-src="{{ asset('img/carousel-2.jpg') }}">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="col-sm-12 col-lg-12 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white">Lokasi Kami</h1>
                </div>
                <div class="bg-white rounded p-1 p-sm-3 wow fadeIn" data-wow-delay="0.5s"><center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1981.9954339699536!2d106.84192496110818!3d-6.522835281833584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1992fd3f7ef%3A0xf14b34c85148e8f8!2sBogor%20Coffee!5e0!3m2!1sid!2sid!4v1668994204500!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div></center>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Projects Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Our Projects</p>
            <h1 class="display-5 mb-5">Some Of Our Wonderful Projects</h1>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Complete Projects</li>
                    <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img/service-1.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Landscaping</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img/service-2.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Pruning plants</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img/service-3.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Irrigation & Drainage</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img/service-4.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Garden Maintenance</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img/service-5.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Green Technology</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="img/service-6.jpg" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Urban Gardening</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Projects End -->

<!-- Team Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Our Team</p>
            <h1 class="display-5 mb-5">Dedicated & Experienced Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img/team-1.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Doris Jordan</h4>
                        <p class="text-primary">Landscape Designer</p>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img/team-2.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Johnny Ramirez</h4>
                        <p class="text-primary">Garden Designer</p>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img/team-3.jpg" alt="">
                    <div class="team-text">
                        <h4 class="mb-0">Diana Wagner</h4>
                        <p class="text-primary">Senior Gardener</p>
                        <div class="team-social d-flex">
                            <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square rounded-circle me-2" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Team End -->

<!-- Testimonial Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say About Us!</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                <a class="btn btn-primary py-3 px-4" href="">See More</a>
            </div>
            <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <img class="img-fluid rounded mb-3" src="img/testimonial-1.jpg" alt="">
                        <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <h4>Client Name</h4>
                        <span>Profession</span>
                    </div>
                    <div class="testimonial-item">
                        <img class="img-fluid rounded mb-3" src="img/testimonial-2.jpg" alt="">
                        <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                        <h4>Client Name</h4>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Testimonial End -->
@endsection