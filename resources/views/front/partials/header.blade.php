<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <!-- Left Social -->
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>needhelp@gmail.com</li>
                                    <li>666 7475 25252</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i>Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <!-- Logo -->
                <div class="logo d-none d-lg-block">
                    <a href="index.html"><img src="{{ asset('front/img/logo/logo.png') }}" width="30px" height="30px" alt=""></a>
                </div>
                <div class="container">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo logo2 d-block d-lg-none">
                            {{-- <a href="index.html"><img src="{{ asset('front/img/logo/logo.png') }}" alt=""></a> --}}
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{ route('front.home') }}">Beranda</a></li>
                                    <li><a href="#">Profil</a>
                                        <ul class="submenu">
                                            <li><a href="{{route('front.tentang-sekolah')}}">Tentang Sekolah</a></li>
                                            <li><a href="{{route('front.visi-dan-misi-sekolah')}}">Visi dan Misi</a></li>
                                            <li><a href="{{route('front.tentang-kepala-sekolah')}}">Kepala Sekolah</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('front.guru') }}">Guru</a></li>
                                    <li><a href="{{ route('front.berita') }}">Berita</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-search d-none d-lg-block">
                            <form action="#" class="form-box f-right ">
                                <input type="text" name="Search" placeholder="Search Courses">
                                <div class="search-icon">
                                    <i class="fas fa-search special-tag"></i>
                                </div>
                            </form>
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
