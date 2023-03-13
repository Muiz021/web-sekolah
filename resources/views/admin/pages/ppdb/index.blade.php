@php
    use Carbon\Carbon;
@endphp
@extends('admin.base')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">PPDB</span></h4>

        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Aktifkan PPDB </h5>
                    <small class="text-muted float-end">
                        <input data-id="{{$status->id}}" class="toggle-class" type="checkbox" data-onstyle="success"
                               data-offstyle="danger" data-toggle="toggle" data-onlabel="Active"
                               data-offlabel="InActive" {{ $status->is_active ? 'checked' : '' }}>
                    </small>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tahun Ajaran</span></h4>
            <div class="flex-column flex-md-row mb-4">
                <div class="text-end pt-3 pt-md-0">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#add-tahun-ajaran">
                        <span><i class="bx bx-plus me-sm-2"></i><span class="d-none d-sm-inline-block">Tambah
                                Tahun Ajaran</span></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            @foreach($ajarans as $ajaran)
                @php
                    $tgl_awal = $ajaran->awal;
                    $tgl_2 = $ajaran->akhir;
                    $tgl_akhir = date('Y-m-d', strtotime($tgl_2 . ' +1 day'));
                @endphp
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $ajaran->nama }}</h5>
                            <p class="card-text">Masa Pendaftaran
                                : {{ Carbon::parse($ajaran->awal)->isoFormat('D MMMM YYYY') }}
                                <b>-</b> {{ Carbon::parse($ajaran->akhir)->isoFormat('D MMMM YYYY') }}
                                <br>
                                Pendaftar
                                : {{ App\Models\Ppdb::whereBetween('created_at',[$tgl_awal,$tgl_akhir])->count() }}
                                Siswa
                            </p>
                            <a class="btn btn-info mx-1"
                               href="{{ route('ppdb.siswa-list',['tgl_awal' => $tgl_awal,'tgl_akhir' => $tgl_2]) }}"><span><i
                                        class="bx bx-list-ul"></i> <span
                                        class="d-none d-sm-inline-block">Detail</span></span>
                            </a>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#edit-modal-{{ $ajaran->id }}"><span><i
                                        class="bx bx-edit me-sm-2"></i> <span
                                        class="d-none d-sm-inline-block">Edit</span></span>
                            </button>
                            <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                    data-bs-target="#delete-modal-{{ $ajaran->id }}"><span><i
                                        class="bx bx-trash me-sm-2"></i> <span
                                        class="d-none d-sm-inline-block">Delete</span></span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('admin.pages.ppdb.modal')

@endsection

@push('script')
    <script>
        $(function () {
            $('.toggle-class').change(function () {
                var is_active = $(this).prop('checked') == true ? 1 : 0;
                var status_id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{ route('ppdb.status-update') }}',
                    data: {'is_active': is_active, 'status_id': status_id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        });
    </script>
@endpush
