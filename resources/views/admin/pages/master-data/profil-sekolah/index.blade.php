@extends('admin.base')


@section('title', 'Profil Sekolah')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">@yield('title')</h4>
        <div class="card mb-4">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    @if ($data == null)
                        <div class="card-header">
                            <a href="{{ url('/membuat-profil-sekolah') }}" class="btn btn-primary">
                                Membuat
                            </a>
                        </div>
                    @endif
                </div>
                @if ($data != null)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ $data->gambar != null ? asset('images/' . $data->gambar) : asset('back/img/avatars/1.png') }}" alt="" width="100%" height="200" class="rounded-circle">
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Nama</label>
                                    <input type="text" class="form-control bg-light" id="defaultFormControlInput" value="{{ $data->nama }}" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control bg-light" disabled>{{ $data->deskripsi }}</textarea>

                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('/edit-profil-sekolah') }}" class="btn btn-primary">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endsection
