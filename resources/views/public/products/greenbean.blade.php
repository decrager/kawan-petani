@extends('layouts.app')

@section('main-content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Green Bean</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Green Bean</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Projects Start -->
<div class="container-xxl pb-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
            <p class="fs-5 fw-bold text-primary">Kami menyediakan kopi dari berbagai Desa di Kabupaten Bogor dan proses pasca panen yang beragam. <br> Kopi yang kami tawarkan memiliki profil rasa yang berbeda-beda.</p>
            <h4 class="display-6 mb-5">Green Bean Coffee</h4>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Arabica</li>
                    <li class="mx-2" data-filter=".second">Robusta</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/products-bg.jpg') }}" alt="">
                    </div>
                    <div class="service-text rounded py-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('img/icon/coffee-beans.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Paseban</h4>
                        <p>
                            <b>Ketinggian</b><br>
                            1000 - 1350 MDPL <br>
                            <b> Grade 1</b><br>
                            <b> Proses </b><br>
                            Honey Process <br>
                            Natural <br>
                            Full Wash
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/products-bg.jpg') }}" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('img/icon/coffee-beans.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Sukawangi</h4>
                        <p>
                            <b>Ketinggian</b><br>
                            1350 - 1600 MDPL <br>
                            <b> Grade 1</b><br>
                            <b> Proses </b><br>
                            Honey Process <br>
                            Natural <br>
                            Full Wash
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/products-bg.jpg') }}" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('img/icon/coffee-beans.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Megamendung</h4>
                        <p>
                            <b>Ketinggian</b><br>
                            800 - 1250 MDPL <br>
                            <b> Grade 1</b><br>
                            <b> Proses </b><br>
                            Honey Process <br>
                            Natural <br>
                            Full Wash
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/products-bg.jpg') }}" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('img/icon/coffee-beans.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Tanjungsari</h4>
                        <p>
                            <b>Ketinggian</b><br>
                            500 - 800 MDPL <br>
                            <b> Grade 1 & 3</b><br>
                            <b> Proses </b><br>
                            Natural <br>
                            Full Wash
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/products-bg.jpg') }}" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('img/icon/coffee-beans.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Buanajaya</h4>
                        <p>
                            <b>Ketinggian</b><br>
                            500 - 750 MDPL <br>
                            <b> Grade 1 & 3</b><br>
                            <b> Proses </b><br>
                            Natural <br>
                            Full Wash
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/products-bg.jpg') }}" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('img/icon/coffee-beans.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Bantarkuning</h4>
                        <p>
                            <b>Ketinggian</b><br>
                            450 - 750 MDPL <br>
                            <b> Grade 1 & 3</b><br>
                            <b> Proses </b><br>
                            Natural
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/products-bg.jpg') }}" alt="">
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('img/icon/coffee-beans.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3">Antajaya</h4>
                        <p>
                            <b>Ketinggian</b><br>
                            450 - 750 MDPL <br>
                            <b> Grade 1 & 3</b><br>
                            <b> Proses </b><br>
                            Natural
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->
@endsection