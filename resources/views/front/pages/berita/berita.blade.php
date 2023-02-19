@extends('front.base')

@section('title', 'Berita Sekolah')
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
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                           @foreach ($beritaSekolah as $item)
                           <article class="blog_item">
                            <div class="blog_item_img">
                                <div class="d-flex justify-content-center">
                                    <img class="card-img rounded-0" src="{{asset('images/berita/'.$item->gambar)}}" alt="">
                                </div>
                                <a href="{{url('berita-detail/'.$item->slug)}}" class="blog_item_date">
                                    <h3>{{date('d',strtotime($item->created_at))}}</h3>
                                    <p>{{date('M',strtotime($item->created_at))}}</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('berita-detail/'.$item->slug)}}">
                                    <h2 class="blog-head" style="color: #2d2d2d;">{{$item->judul}}</h2>
                                </a>
                                <p>{!!Str::limit($item->deskripsi,200)!!}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                           @endforeach


                           <nav class="blog-pagination justify-content-center d-flex">
                               <ul class="pagination">
                                   {{ $beritaSekolah->links() }}
                                </ul>
                            </nav>
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
