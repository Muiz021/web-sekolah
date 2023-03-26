@extends('front.base')
@section('title', 'Tentang Sekolah')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <style>
        .gallery-block {
            padding-bottom: 60px;
            padding-top: 60px;
        }

        .gallery-block .heading {
            margin-bottom: 50px;
            text-align: center;
        }

        .gallery-block .heading h2 {
            font-weight: bold;
            font-size: 1.4rem;
            text-transform: uppercase;
        }

        .gallery-block.cards-gallery h6 {
            font-size: 17px;
            font-weight: bold;
        }

        .gallery-block.cards-gallery .card {
            transition: 0.4s ease;
        }

        .gallery-block.cards-gallery .card img {
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
        }

        .gallery-block.cards-gallery .card-body {
            text-align: center;
        }

        .gallery-block.cards-gallery .card-body p {
            font-size: 15px;
        }

        .gallery-block.cards-gallery a {
            color: #212529;
        }

        .gallery-block.cards-gallery a:hover {
            text-decoration: none;
        }

        .gallery-block.cards-gallery .card {
            margin-bottom: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            width: 100%;
            height: 30vh;
            object-fit: fill;
        }

        @media (min-width: 576px) {

            .gallery-block .transform-on-hover:hover {
                transform: translateY(-10px) scale(1.02);
                box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.15) !important;
            }
        }
    </style>
@endpush

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
        <!--? Tentang Sekolah Start -->
        <div class="team-area pt-160">

            <div class="container mb-100">
                <div class="row">
                    @if ($tentangSekolah != null)
                        <div class="col-lg-8 col-md-8 mx-auto">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('images/foto/' . $tentangSekolah->gambar) }}" alt="">
                            </div>

                            <h1 class="my-5"><b>{{ $tentangSekolah->nama }}</b></h1>
                            <div class="text-justify">
                                {!! $tentangSekolah->deskripsi !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="container-fluid" style="background-color: #F3F8FB">
                <div class="container">
                    <div class="row">
                        <div class="lokasi-sekolah col-12 mt-5">
                            <div class="d-flex justify-content-center mb-50 mt-0">
                                <h1 style="font-size: 50px">
                                    <b>Galeri Sekolah</b>
                                </h1>
                            </div>
                            <section class="gallery-block cards-gallery">
                                <div class="row">
                                    @foreach ($galleries as $gallery)
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card border-0 transform-on-hover">
                                                <a class="lightbox" href="/images/galeri/{{ $gallery->foto }}">
                                                    <img src="/images/galeri/{{ $gallery->foto }}" alt="Card Image"
                                                        class="card-img-top">
                                                </a>
                                                <div class="card-body">
                                                    <h6><a href="#">{{ $gallery->judul }}</a></h6>
                                                    {{-- <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur --}}
                                                    {{--    adipiscing elit. Nunc quam urna.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid pb-160">
                <div class="container">
                    <div class="row">
                        <div class="lokasi-sekolah col-12 mt-5">
                            <div class="d-flex justify-content-center mb-50 mt-60">
                                <h1 style="font-size: 50px">
                                    <b>Lokasi Sekolah</b>
                                </h1>
                            </div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.714129190302!2d130.81825341404343!3d-0.41407349969789525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d5f1d04139a73a3%3A0xfa73757a1cdc4655!2sMTs.%20LANGUAGE%20INSAN%20MANDIRI!5e0!3m2!1sid!2sid!4v1679840782116!5m2!1sid!2sid"
                                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Team Ara End -->
    </main>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.cards-gallery', {
            animation: 'slideIn'
        });
    </script>
@endpush
