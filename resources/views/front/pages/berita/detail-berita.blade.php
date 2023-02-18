@extends('front.base')

@section('title', 'Berita Detail Sekolah')
@section('content')
<main>
    <!--? Hero Start -->
    <div class="slider-area ">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Berita Sekolah</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                       <div class="feature-img d-flex justify-content-center">
                          <img class="img-fluid" src="{{asset('images/berita/'.$beritaSekolah->gambar)}}" alt="">
                       </div>
                       <div class="blog_details">
                          <h2 style="color: #2d2d2d;">
                            {{$beritaSekolah->judul}}
                          </h2>
                          <ul class="blog-info-link mt-3 mb-4">
                             <li><i class="fa fa-user"></i> Travel, Lifestyle</li>
                             <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                                <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                              </svg> <span>{{date('d F , Y',strtotime($beritaSekolah->created_at))}}</span></li>
                          </ul>
                           {!!$beritaSekolah->deskripsi!!}
                       </div>
                    </div>
                 </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{url('/berita')}}" method="get">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" name="cari" class="form-control" placeholder="Search Keyword" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'" value="{{$request->cari}}">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Mencari</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title" style="color: #2d2d2d;">Post Terbaru</h3>
                           @foreach ($postTerbaru as $item)
                           <div class="media post_item">
                            <img src="{{asset('images/berita/'.$item->gambar)}}" width="30px" height="30px" alt="post">
                            <div class="media-body">
                                <a href="{{url('berita-detail/'.$item->slug)}}">
                                    <h3 style="color: #2d2d2d;">{!!Str::limit($item->judul,50)!!}</h3>
                                </a>
                                <p>{{date('d F , Y',strtotime($item->created_at))}}</p>
                            </div>
                        </div>
                           @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
</main>
@endsection
