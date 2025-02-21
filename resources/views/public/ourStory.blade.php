@extends('layouts.app')

@section('main-content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Our Story</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Story</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Our Story Start -->
<div class="container-xxl pb-5">
    <div class="container">
        <div class="row g-5 align-items-end mb-3">
            <div class="col-lg-6 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" data-wow-delay="0.1s" src="{{ asset('img/our-story-1.jpg') }}">
            </div>
            <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-1 text-primary mb-0">7</h1>
                <p class="text-primary mb-4">Years of Experience</p>
                <h1 class="display-5 mb-4">Our History</h1>
                <p class="mb-4" style="font-size: 20px">Bogor Coffee adalah perusahaan penyedia hasil pertanian kopi yang digagas pada tahun 2015. Berawal dari pertemuan yang tidak disengaja dengan petani kopi saat melakukan kegiatan sosial di Kabupaten Bogor. Pertemuan tersebut menggerakkan kami untuk membantu memperkenalkan kopi dari Kabupaten Bogor dan membina petani kopi di daerah tersebut.</p>
            </div>
        </div>
        <div class="row g-5 align-items-start">
            <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4" style="font-size: 20px; text-align: right">Dalam perjalanan, kami belajar bahwa kopi yang berkualitas ditentukan dari proses di kebun. Untuk memperdalam ilmu, kami mengikuti berbagai kelas kopi, baik on farm maupun off farm.</p>
                <p class="mb-4" style="font-size: 20px; text-align: right">Setelah mengikuti kelas, kami melakukan pembinaan kepada petani agar dapat menghasilkan biji kopi berkualitas. Bermula dari 6 petani di tahun 2016, saat ini kami sudah membina lebih dari 200 petani kopi yang dipimpin oleh 8 ketua kelompok tani dari 8 desa.</p>
            </div>
            <div class="col-lg-6 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" data-wow-delay="0.1s" src="{{ asset('img/our-story-2.jpg') }}">
            </div>
        </div>
    </div>
</div>
<!-- Our Story End -->

<!-- Tagline Start -->
<div class="container-fluid facts" data-parallax="scroll" data-image-src="{{ asset('img/tagline.jpg') }}">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-12 col-lg-12 text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white">Tagline Here</h1>
                <span class="fs-5 fw-semi-bold text-light">- Kawan Petani -</span>
            </div>
        </div>
    </div>
</div>
<!-- Tagline End -->

<!-- Highlight Start -->
<div class="container-xxl py-5 ">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Our Highlights</p>
            <h1 class="display-6 mb-5">Some Of Our Highlights Over the Years</h1>
        </div>
        <div class="row g-4 portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('img/highlight-1.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Pembinaan Petani</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/highlight-1.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-1" style="text-align: center; font-size: 14px">2016, Bogor Coffee mulai membina petani dan rutin mendampingi pengelolaan kebun hingga proses panen dan pasca panen. Hal ini kami lakukan untuk menghasilkan biji kopi berkualitas. Saat ini kami sudah memiliki lebih dari 200 petani binaan.</h4>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('img/highlight-2.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Mencoba Berjualan Kopi</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/highlight-2.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-1" style="text-align: center; font-size: 14px">2016, untuk memahami pasar kami mencoba berjualan kopi agar dapat memahami apa yang dibutuhkan oleh calon pelanggan. Selain itu kami juga mengikuti berbagai kelas kopi untuk membuka wawasan.</h4>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('img/highlight-3.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Coffee Festival</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/highlight-3.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-1" style="text-align: center; font-size: 14px">2018, Bogor Coffee ditunjuk sebagai panitia yang mewakili Indonesia untuk pergi ke acara Coffee Festival di Amsterdam. Di sana, kopi asal Bogor mendapat banyak pujian karena cita rasa yang unik.</h4>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('img/highlight-4.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Ulang Tahun Bulog</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/highlight-4.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-1" style="text-align: center; font-size: 14px">2018, Bogor Coffee memenuhi undangan acara ulang tahun Bulog, bertemu dengan Komjen Pol. (Purn.) Budi Waseso. Di sana kami berbincang perihal cara-cara meningkatkan kesejahteraan petani, dan mendapat banyak masukkan dari Beliau.</h4>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('img/highlight-5.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Open House Wapres</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/highlight-5.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-1" style="text-align: center; font-size: 14px">2019, Bogor Coffee sebagai perwakilan dari petani kopi Bogor diundang ke open house di kediaman Wakil Presiden Indonesia terpilih, Bapak KH Ma'ruf Amin. Disana kami menyajikan dan memperkenalkan kopi Bogor kepada tamu di acara tersebut.</h4>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('img/highlight-6.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Audiensi PHRI</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/highlight-6.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-1" style="text-align: center; font-size: 14px">2019, Bogor Coffee melakukan audiensi ke Perhimpunan Hotel dan Restoran Indonesia (PHRI) Kabupaten Bogor dan Bupati Bogor, Ibu Ade Yasin. Audiensi ini dilakukan untuk mendorong penggunaan kopi lokal di hotel dan restoran wilayah Kabupaten Bogor.</h4>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('img/highlight-7.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Awal Pandemi</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/highlight-7.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-1" style="text-align: center; font-size: 14px">2020, meski terdampak pandemi, Bogor Coffee tetap membeli hasil panen petani dan terus mendampingi pengelolaan kebun serta proses panen. Banyak petani di Kabupaten Bogor yang terdampak pandemi dan memiliki kendala modal kerja untuk musim panen selanjutnya.</h4>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('img/highlight-8.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Cenderamata Dubes Iraq</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/highlight-8.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-1" style="text-align: center; font-size: 14px">2020, Bogor Coffee bekerja sama dengan Kementerian Luar Negeri Indonesia, menjadikan kopi Bogor sebagai cendera mata untuk tamu kehormatan Duta Besar. Kerjasama ini dilakukan untuk memperkenalkan kopi asal Kabupaten Bogor ke berbagai negara. (Foto: Elma Iwan Lubis - Dubes RI untuk Irak)</h4>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-inner rounded">
                    <img class="img-fluid" src="{{ asset('img/highlight-9.jpg') }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">Bekerja sama dengan BRI Agro</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('img/highlight-9.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <h4 class="mt-1" style="text-align: center; font-size: 14px">2020, Bogor Coffee bekerjasama dengan BRI Agro, mengajukan pinjaman modal kerja untuk para petani. Bogor Coffee dalam kerjasama ini bertindak sebagai outtaker yang akan menyerap stok kopi dari petani.</h4>
            </div>
        </div>
    </div>
</div>
<!-- Highlight End -->
@endsection