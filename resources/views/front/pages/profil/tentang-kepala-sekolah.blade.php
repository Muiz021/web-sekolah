@extends('front.base')


@section('title', 'Tentang Kepala Sekolah')
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
                @if ($tentangKepalaSekolah != null)
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('images/foto/' . $tentangKepalaSekolah->gambar) }}" alt="">
                        </div>

                        <h1 class="my-5"><b>{{ $tentangKepalaSekolah->nama }}</b></h1>
                        <p style="text-align:justify">{!! $tentangKepalaSekolah->deskripsi !!}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <!-- Team Ara End -->
    </main>
@endsection
