@extends('front.base')

@section('title', 'Beranda')

@section('content')
    <main>
        @if($sliders->count() != 0)
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    @foreach($sliders as $key => $slider)
                        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                            <img src="images/slider/{{ $slider->image }}" class="d-block w-100" alt="...">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        @endif

        @if($tentangKepalaSekolah != null)
            <div class="container box_1170">
                <div class="section-top-border">
                    <h3 class="mb-30">Sambutan Kepala MTs Language Insan Mandiri</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('images/foto/' . $tentangKepalaSekolah->gambar) }}" alt=""
                                 class="img-fluid">
                        </div>
                        <div class="col-md-9 mt-sm-20">
                            <p>{!! $tentangKepalaSekolah->deskripsi !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{-- Tentang Sekolah --}}
        @if($tentangSekolah != null)
            <div class="container box_1170">

                <div class="section-top-border">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-tittle text-center mb-50">
                                <h2>Profil</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-sm-20">
                            <h3 class="mb-30">{{ $tentangSekolah->nama }}</h3>
                            <p>{!! \Illuminate\Support\Str::words($tentangSekolah->deskripsi,50) !!}</p>
                            <a href="{{ route('front.tentang-sekolah') }}" class="btn">More About Us</a>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('images/foto/' . $tentangSekolah->gambar) }}" alt=""
                                 class="img-fluid">
                        </div>

                    </div>
                </div>
            </div>
        @endif

        {{-- Guru --}}
        <div class="team-area pt-160 pb-160 section-bg"
             data-background="{{ asset('front/img/gallery/section_bg02.png') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-70">
                            <h2>Our Teachers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme">
                            @foreach($gurus as $guru)
                                {{--<div class="col-lg-12 col-md-12 col-sm-12">--}}
                                <div class="single-team item mb-30">
                                    <div class="team-img">
                                        <img src="/images/foto/{{ $guru->foto }}" alt="">
                                    </div>
                                    <div class="team-caption">
                                        <h3><a href="#">{{ $guru->nama }}</a></h3>
                                        <p class="mb-0">{{ $guru->jabatan }}</p>
                                        <p><b>"{{ $guru->deskripsi }}"</b></p>
                                    </div>
                                </div>
                                {{--</div>--}}
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-70">
                            <a href="{{ route('front.guru') }}" class="btn white-btn">See All Teachers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Berita --}}
        <div class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-50">
                            <h2>Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($beritas as $berita)
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="home-blog-single mb-30">
                                <div class="blog-img-cap">
                                    <div class="blog-img">
                                        <img src="{{asset('images/berita/'.$berita->gambar)}}" alt="">
                                        <!-- Blog date -->
                                        <div class="blog-date text-center">
                                            <h3 class="text-white">{{date('d',strtotime($berita->created_at))}}</h3>
                                            <p>{{date('M',strtotime($berita->created_at))}}</p>
                                        </div>
                                    </div>
                                    <div class="blog-cap">
                                        <h3>
                                            <a href="{{route('front.berita_detail',$berita->slug)}}">{{$berita->judul}}</a>
                                        </h3>
                                        <a href="{{ route('front.berita_detail',$berita->slug) }}" class="more-btn">Lihat
                                            Selengkapnya »</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
@endsection

@push('script')
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel()

            $('#heroCarousel').carousel({
                interval: 3000,
                cycle: true
            });
        })
    </script>
@endpush
