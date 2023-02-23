<!-- Modal Tambah-->
<div class="modal fade" id="add-profil-sekolah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah @yield('title')</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('profil-sekolah.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="basic-default-company">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Nama</label>
                            <input type="text" name="nama" class="form-control" id="basic-default-fullname"
                                   placeholder="MTs LANGUAGE INSAN MANDIRI">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Deskripsi</label>
                            <textarea id="text-create-profil-sekolah" type="text" name="deskripsi" cols="30" rows="5"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary d-block ms-auto">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@isset($data->id)
    <!-- Modal Edit-->
    <div class="modal fade" id="edit-modal-{{ $data->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Edit @yield('title')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/profil-sekolah/'.$data->id) }}" enctype="multipart/form-data"
                          method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Gambar Lama</label> <br>
                            <img src="{{ asset('images/foto/' . $data->gambar) }}" alt="" height="122" width="auto">
                        </div>
                        <input type="hidden" name="gambarLama" value="{{ $data->gambar }}">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="basic-default-company">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Nama</label>
                            <input type="text" name="nama" class="form-control" id="basic-default-fullname"
                                   value="{{ $data->nama }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Deskripsi</label>
                            <textarea id="text-edit-profil-sekolah" type="text" name="deskripsi" cols="30" rows="5"
                                      class="form-control">{!!$data->deskripsi!!}</textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary d-block ms-auto">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="delete-modal-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus @yield('title')</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ route('profil-sekolah.destroy', $data->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                    <div class="modal-body">
                        Anda yakin ingin menghapus @yield('title') <b>{{ $data->nama }}</b>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tutup</span>
                        </button>
                        <button type="submit" class="btn btn-outline-danger ml-1" id="btn-save">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Yakin</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endisset


@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#text-create-profil-sekolah'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

@section('scripts2')
    <script>
        ClassicEditor
            .create(document.querySelector('#text-edit-profil-sekolah'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
