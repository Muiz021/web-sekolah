@extends('admin.base')

@push('style')
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}"/>
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}"/>
    <link rel="stylesheet" href="{{ asset('back/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}"/>
@endpush

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">List Siswa</h4>

        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="text-end pt-3 pt-md-0">
                    <a class="btn btn-success" href="{{ route('ppdb.list-siswa-export',[$awal,$akhir,$ta->id]) }}">
                        <span><i class="bx bx-printer me-sm-2"></i><span
                                class="d-none d-sm-inline-block">Export</span></span>
                    </a>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="datatables-users table border-top" id="user">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Asal Sekolah</th>
                            <th>No. HP</th>
                            {{--<th>Aksi</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $siswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->alamat }}</td>
                                <td>{{ $siswa->asal_sekolah }}</td>
                                <td>{{ $siswa->no_hp }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{--            @include('admin.pages.user.modal')--}}
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
            $('#user').DataTable({
                scrollX: true,
            });
        });
    </script>
@endpush
