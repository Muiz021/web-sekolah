@extends('front.base')

@section('title', 'Beranda')
@section('content')
    <main>
        <!--? slider Area Start-->
        <div class="slider-beranda">
            <div class="container-fluid bg-dark-2">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('front.tentang-sekolah') }}" class="btn">MTs LANGUAGE INSAN MANDIRI</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <h2>Profil</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-web-design"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{route('front.visi-dan-misi-sekolah')}}">VISI MISI</a></h5>
                                <p>{!! Str::limit($visiDanMisiSekolah->deskripsi, 10) !!}</p>
                                <a href="{{route('front.visi-dan-misi-sekolah')}}" class="read-more1">Read More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-education"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{route('front.tentang-kepala-sekolah')}}">KEPALA SEKOLAH</a></h5>
                                <p>{!! Str::limit($tentangKepalaSekolah->deskripsi) !!}</p>
                                <a href="{{route('front.tentang-kepala-sekolah')}}" class="read-more1">Read More ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-communications"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{route('front.tentang-sekolah')}}">SEKOLAH</a></h5>
                                <p>{!! Str::limit($tentangSekolah->deskripsi) !!}</p>
                                <a href="{{route('front.tentang-sekolah')}}" class="read-more1">Read More ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Categories Area End -->

        <!-- Popular Course End -->
        <!--? Team Ara Start -->
        <div class="team-area pt-160 pb-160 section-bg" data-background="{{ asset('front/img/gallery/section_bg02.png') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-70">
                            <span>More About Our Faculty</span>
                            <h2>Our Best Teachers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('front/img/gallery/team1.png') }}" alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="instructor.html">Alexa Janathon</a></h3>
                                <p>Faculty</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('front/img/gallery/team2.png') }}" alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="instructor.html">Janathon Smith</a></h3>
                                <p>Faculty</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('front/img/gallery/team3.png') }}" alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="instructor.html">Alexa MacCalum</a></h3>
                                <p>Faculty</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{ asset('front/img/gallery/team4.png') }}" alt="">
                                <!-- Blog Social -->
                                <ul class="team-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-caption">
                                <h3><a href="instructor.html">Alexa j Watson</a></h3>
                                <p>Faculty</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-70">
                            <a href="instructor.html" class="btn white-btn">View All Faculty</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        <!--? About Law Start-->
        {{-- <div class="about-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span>More About Our Company</span>
                                <h2>Want to know more</h2>
                            </div>
                            <p>There arge many variations ohf passages of sorem gpsum ilable, but the majority have
                                suffered alteration in some form, by ected humour, or randomised words whi.</p>
                            <ul>
                                <li><span class="flaticon-business"></span> Creative ideas base</li>
                                <li><span class="flaticon-communications-1"></span> Assages of sorem gpsum ilable</li>
                                <li><span class="flaticon-graduated"></span> Have suffered alteration in so</li>
                                <li><span class="flaticon-tools-and-utensils"></span> Randomised words whi</li>
                            </ul>
                            <a href="about.html" class="btn">More About Us</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img d-none d-lg-block">
                                <img src="{{ asset('front/img/gallery/about2.png') }}" alt="">
                            </div>
                            <div class="about-back-img ">
                                <img src="{{ asset('front/img/gallery/about1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- About Law End-->
        <!--? Testimonial Start -->
        <div class="testimonial-area fix pt-180 pb-180 section-bg" data-background="{{ asset('front/img/gallery/section_bg03.png') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="{{ asset('front/img/gallery/testimonial.png') }}" class="ani-btn " alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and
                                        follow the well-worn path. You need to create a new and
                                        original path for yourself.</p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="testimonial-icon mb-45">
                                    <img src="{{ asset('front/img/gallery/testimonial.png') }}" class="ani-btn " alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>You can’t succeed if you just do what others do and
                                        follow the well-worn path. You need to create a new and
                                        original path for yourself. </p>
                                    <!-- Rattion -->
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="rattiong-caption">
                                        <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!--? Blog Area Start -->
        <div class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-50">
                            <span>Our Latest News From Our Blog</span>
                            <h2>Latest News From Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{ asset('front/img/gallery/home-blog1.png') }}" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>| Properties</p>
                                    <h3><a href="blog_details.html">Footprints in Time is perfect House in
                                            Kurashiki</a></h3>
                                    <a href="blog_details.html" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{ asset('front/img/gallery/home-blog2.png') }}" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>| Properties</p>
                                    <h3><a href="blog_details.html">Footprints in Time is perfect House in
                                            Kurashiki</a></h3>
                                    <a href="blog_details.html" class="more-btn">Read more »</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
    </main>
@endsection
