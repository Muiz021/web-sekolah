@extends('front.base')


@section('title','Tentang Sekolah')
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
        <div class="team-area pt-160 pb-160">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
    </main>
@endsection
