@extends('admin.base')


@section('title', 'Visi Dan Misi Sekolah')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">@yield('title')</h4>
        <div class="card mb-4">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    @if ($visiDanMisiSekolah == null)
                        <div class="card-header">
                            <div class="pt-3 pt-md-0">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#add-visi-misi">
                                    <span><i class="bx bx-plus me-sm-2"></i><span class="d-none d-sm-inline-block">Tambah
                                            Visi Dan Misi</span></span>
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
                @if ($visiDanMisiSekolah != null)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="defaultFormControlInput" class="form-label">Deskripsi</label>
                                    <div class="form-control">
                                        {!! $visiDanMisiSekolah->deskripsi !!}
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger btn-sm me-3" type="button" data-bs-toggle="modal"
                                    data-bs-target="#delete-modal-{{ $visiDanMisiSekolah->id }}"><span><i
                                            class="bx bx-trash me-sm-2"></i> <span
                                            class="d-none d-sm-inline-block">Delete</span></span>
                                </button>
                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#edit-modal-{{ $visiDanMisiSekolah->id }}"><span><i
                                            class="bx bx-edit me-sm-2"></i> <span
                                            class="d-none d-sm-inline-block">Edit</span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @include('admin.pages.master-data.visi-dan-misi.modal')
@endsection
