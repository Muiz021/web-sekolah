@extends('front.base')

@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Guru</h2>
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
                    @forelse ($gurus as $guru)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-team mb-30">
                                <div class="team-img">
                                    <img src="/images/foto/{{ $guru->foto }}" alt="">
                                </div>
                                <div class="team-caption">
                                    <h3><a href="#">{{ $guru->nama }}</a></h3>
                                    <p>{{ $guru->jabatan }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    <h2 class="mx-auto">Belum ada data guru saat ini</h2>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
    </main>
@endsection
