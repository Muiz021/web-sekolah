@extends('admin.base')


@section('title', 'Visi dan Misi Sekolah')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">@yield('title')</h4>
        <div class="card">
            @if ($visiDanMisiSekolah == null)
                <div class="card-header">
                    <div class="col-lg-4 col-md-8">
                        <a href="{{ url('/visi-dan-misi/create') }}" class="btn btn-primary">
                            Membuat
                        </a>
                    </div>
                </div>
            @endif
            <div class="card-body">
                <div>
                    <label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                    {!! $visiDanMisiSekolah->deskripsi !!}
                    @if ($visiDanMisiSekolah != null)
                    <a href="{{ url('/visi-dan-misi/'.$visiDanMisiSekolah->id.'/edit') }}" class="btn btn-primary float-end">
                        Edit
                    </a>
                    @endif
                </div>
            </div>
        </div>
        @endsection
