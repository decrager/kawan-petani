@extends('layouts.app')

@section('main-content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-1 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-end">
            {{-- <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/about.jpg">
            </div> --}}
            <div class="col-lg-12 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-4 text-primary mb-0">Bogor Coffee</h1>
                <p class="text-primary mb-4">PT. Bogor Kopi Indonesia</p>
                <p class="mb-4" style="font-size: 20px">Bogor Coffee adalah perusahaan penyedia hasil pertanian kopi dari Kabupaten Bogor, Jawa Barat yang digagas pada tahun 2015. Kami bertekad untuk ikut berperan dalam meningkatkan kesejahteraan petani dan turut serta membesarkan industri kopi di Indonesia.</p>
                <p class="mb-4" style="font-size: 20px">Kami senantiasa mendukung pemerintah dengan memberikan masukan mengenai kondisi serta kebutuhan petani, juga membina petani dalam mengelola kebun dan proses pasca panen untuk menghasilkan biji kopi yang berkualitas.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Tagline Start -->
<div class="container-fluid facts" data-parallax="scroll" data-image-src="{{ asset('img/tagline.jpg') }}">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-12 col-lg-12 text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white">Kawan petani, lebih dekat dengan petani.</h1>
                <span class="fs-5 fw-semi-bold text-light">- Kawan Petani -</span>
            </div>
        </div>
    </div>
</div>
<!-- Tagline End -->

<!-- Visi & Misi Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <p class="fs-5 fw-bold text-primary">- Visi & Misi -</p>
            <h2 class="display-5 mb-3">Visi</h2>
            <h4>Menjadi perusahaan yang ikut berperan dalam membangun kesejahteraan petani kopi dan membangun industri kopi di Indonesia.</h4>
            <h2 class="display-6 my-3">Misi</h2>
            <h4>Meningkatkan kemampuan dan pengetahuan petani agar menghasilkan biji kopi berkualitas.</h4>
            <h4>Membina petani dalam pengelolaan kebun kopi.</h4>
            <h4>Memperkenalkan beragam jenis kopi dari Kabupaten Bogor, Jawa Barat baik di dalam maupun luar negeri.</h4>
        </div>
    </div>
</div>
<!-- Visi & Misi End -->

<!-- Team Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Our Team</p>
            <h1 class="display-5 mb-5">Founder Members</h1>
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
@endsection