<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-bottom header-sticky">
                <!-- Logo -->
                <div class="logo d-none d-lg-block" style="padding: 10px 31px">
                    <a href="{{route('front.home')}}"><img src="{{ asset('front/img/logo/logo.png') }}" width="80px"
                                                           height="80px"
                                                           alt=""></a>
                </div>
                <div class="container">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo logo2 d-block d-lg-none">
                            {{-- <a href="index.html"><img src="{{ asset('front/img/logo/logo.png') }}" alt=""></a> --}}
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block mx-auto">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ route('front.home') }}">Beranda</a></li>
                                    <li><a href="#">Profil</a>
                                        <ul class="submenu">
                                            <li><a href="{{route('front.tentang-sekolah')}}">Tentang Sekolah</a></li>
                                            <li><a href="{{route('front.visi-dan-misi-sekolah')}}">Visi dan Misi</a>
                                            </li>
                                            <li><a href="{{route('front.tentang-kepala-sekolah')}}">Kepala Sekolah</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('front.guru') }}">Guru</a></li>
                                    <li><a href="{{ route('front.berita') }}">Berita</a></li>
                                    <li><a href="{{ route('front.ppdb') }}">PPDB</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-search d-none d-lg-block">
                            <a href="#" class="login"><i class="ti-user i-login"></i>Login</a>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
