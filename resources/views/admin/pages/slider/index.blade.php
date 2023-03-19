@extends('admin.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}"/>
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}"/>
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}"/>
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Slider</h4>

        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="text-end pt-3 pt-md-0">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-guru">
                        <span><i class="bx bx-plus me-sm-2"></i><span class="d-none d-sm-inline-block">Tambah
                                Slider</span></span>
                    </button>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="datatables-users table border-top" id="guru">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Urutan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="/images/slider/{{ $slider->image }}" width="200" alt=""></td>
                                <td>{{ $slider->urutan }}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal"
                                            data-bs-target="#edit-modal-{{ $slider->id }}"><span><i
                                                class="bx bx-edit me-sm-2"></i> <span
                                                class="d-none d-sm-inline-block">Edit</span></span>
                                    </button>
                                    <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                            data-bs-target="#delete-modal-{{ $slider->id }}"><span><i
                                                class="bx bx-trash me-sm-2"></i> <span
                                                class="d-none d-sm-inline-block">Delete</span></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @include('admin.pages.slider.modal')
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('back/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('back/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('back/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('back/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#guru').DataTable({
                "pageLength": 5,
                scrollX: true,
            });
        });
    </script>
@endpush
