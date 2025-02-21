@extends('layouts.app')

@section('main-content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Roasted Bean</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Roasted Bean</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Projects Start -->
<div class="container-xxl pb-3">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
            <p class="fs-5 fw-bold text-primary" style="font-size: 26px">Bekerja sama dengan roastery lokal, Bogor Coffee dapat menyediakan Roasted Bean sesuai dengan kebutuhan konsumen:</p>
            <h6 class="display-6" style="font-size: 28px">Origin : Sesuai dengan origin yang disediakan Bogor Coffee</h6>
            <h6 class="display-6" style="font-size: 28px">Blend : Dapat disesuaikan dengan permintaan anda</h6>
            <h6 class="display-6" style="font-size: 28px">Profile : Dapat disesuaikan dengan permintaan anda</h6>
            <p class="fs-5 fw-bold text-primary" style="font-size: 26px">Harga penawaran tergantung dengan permintaan anda, untuk mengetahui lebih lanjut,<br>silahkan menghubungi kami dengan klik tombol di bawah</p>
            <a class="btn btn-primary py-3 px-4" href="{{ route('contact') }}">Contact</a>
        </div>
    </div>
</div>
<!-- Projects End -->
@endsection