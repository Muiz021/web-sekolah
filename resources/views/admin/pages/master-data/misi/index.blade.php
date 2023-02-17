@extends('admin.base')


@section('title', 'Misi Sekolah')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">@yield('title')</h4>
        <div class="card">
            <div class="card-header">
                <div class="col-lg-4 col-md-8">
                    <a href="{{ url('/membuat-misi-sekolah') }}" class="btn btn-primary">
                        Membuat
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                  <tbody class="table-border-bottom-0">
                    @foreach ($misiSekolah as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td>
                            <a href="{{url('/edit-misi-sekolah/'. $item->id)}}" class="btn btn-success me-3">Edit</a>
                            <a href="{{url('/delete-misi-sekolah/' . $item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                  </table>
                </div>
            </div>
          </div>
    @endsection
