@extends('admin.base')


@section('title', 'Mengedit Visi Sekolah')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">@yield('title')</h4>
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <div class="card py-3 px-3">
                    <form action="{{ url('/update-visi-sekolah/'. $data->id) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Deskripsi</label>
                            <textarea type="text" name="deskripsi" cols="30" rows="5" class="form-control">{{$data->deskripsi}}</textarea>
                        </div>
                            <div>
                                <button type="submit" class="btn btn-primary d-block ms-auto">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
