@extends('admin.base')


@section('title', 'Dashboard')
@section('content')
    @php
        use App\Models\Guru;
        use App\Models\Ppdb;
        use App\Models\BeritaSekolah;
    @endphp
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="d-flex align-items-center row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Selamat Datang,</h5>
                                <h3 class="card-title text-primary">{{ Auth::user()->name }}</h3>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('back/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 col-xl-4">
                <div class="card bg-success text-white mb-3">
                    <div class="card-header">Jumlah Data Guru</div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24"
                                style="fill: #fff;transform: ;msFilter:;">
                                <path
                                    d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12 10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36 7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8 8.1 8.1 0 0 1 8 8 8 8 0 0 1-2.39 5.64z">
                                </path>
                                <path
                                    d="M12 6a3.91 3.91 0 0 0-4 4 3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2 1.91 1.91 0 0 1-2 2z">
                                </path>
                            </svg>
                            <h3 class="text-white" style="font-size: 72px">{{ Guru::count() }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-primary text-white mb-3">
                    <div class="card-header">Jumlah Data PPDB</div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24"
                                style="fill: #fff;transform: ;msFilter:;">
                                <path
                                    d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12 10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36 7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8 8.1 8.1 0 0 1 8 8 8 8 0 0 1-2.39 5.64z">
                                </path>
                                <path
                                    d="M12 6a3.91 3.91 0 0 0-4 4 3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2 1.91 1.91 0 0 1-2 2z">
                                </path>
                            </svg>
                            <h3 class="text-white" style="font-size: 72px">{{ Ppdb::count() }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card bg-secondary text-white mb-3">
                    <div class="card-header">Jumlah Data Berita</div>
                    <div class="card-body">
                       <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24"
                        style="fill: #fff;transform: ;msFilter:;">
                        <path
                            d="M20 17a1 1 0 0 1-2 0V5a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13a2 2 0 0 0 2 2h15c1.654 0 3-1.346 3-3V7h-2v10zM12 7h3v2h-3V7zm0 4h3v2h-3v-2zM5 7h5v6H5V7zm0 10v-2h10v2H5z">
                        </path>
                    </svg>
                    <h3 class="text-white" style="font-size: 72px">{{ BeritaSekolah::count() }}</h3>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
