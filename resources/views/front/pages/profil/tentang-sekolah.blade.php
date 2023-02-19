@extends('front.base')


@section('title', 'Tentang Sekolah')
@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>@yield('title')</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Team Ara Start -->
        <div class="team-area pt-160">
            <div class="container mb-100">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('images/foto/' . $tentangSekolah->gambar) }}" alt="">
                        </div>

                        <h1 class="my-5"><b>{{ $tentangSekolah->nama }}</b></h1>
                        <p style="text-align:justify">{!! $tentangSekolah->deskripsi !!}</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid pb-160" style="background-color: #F3F8FB">
                <div class="container">
                    <div class="row">
                        <div class="lokasi-sekolah col-12 mt-5">
                            <div class="d-flex justify-content-center mb-50 mt-100">
                                <h1 style="font-size: 50px">
                                    <b>Lokasi Sekolah</b>
                                </h1>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9050.394796816774!2d119.5001666539188!3d-5.208283931638879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee267ff62d2b7%3A0xa96ffb26e4edcc26!2sUniversitas%20Islam%20Negeri%20Alauddin%20Makassar!5e0!3m2!1sid!2sid!4v1676832022382!5m2!1sid!2sid"
                                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
    </main>
@endsection
