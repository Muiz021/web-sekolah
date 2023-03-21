<!-- Modal Tambah-->
<div class="modal fade" id="add-galeri" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Judul (Deskripsi Singkat)</label>
                            <input type="text" name="judul" class="form-control"
                                   placeholder="Masukkan Judul" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach ($galleries as $galeri)
    @isset($galeri->id)
        <!-- Modal Edit-->
        <div class="modal fade" id="edit-modal-{{ $galeri->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Galeri</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('galeri.update', $galeri->id) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Judul (Deskripsi Singkat)</label>
                                    <input type="text" name="judul" class="form-control"
                                           value="{{ $galeri->judul }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Status</label><br>
                                    <div class="form-check form-check-inline mt-3 form-check-success">
                                        <input class="form-check-input" type="radio" name="is_active"
                                               id="inlineRadio1"
                                               value="1"{{ $galeri->is_active == 1 ? 'checked' : '' }}/>
                                        <label class="form-check-label" for="inlineRadio1">Aktif</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-danger">
                                        <input class="form-check-input" type="radio" name="is_active"
                                               id="inlineRadio2"
                                               value="0" {{ $galeri->is_active == 0 ? 'checked' : '' }}/>
                                        <label class="form-check-label" for="inlineRadio2">Tidak Aktif</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-label-secondary"
                                    data-bs-dismiss="modal">Tutup
                            </button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Delete -->
        <div class="modal fade" id="delete-modal-{{ $galeri->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Galeri</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form action="{{ route('galeri.destroy', $galeri->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $galeri->id }}">
                        <div class="modal-body">
                            Anda yakin ingin menghapus Galeri <b>{{ $galeri->judul }}</b>
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
@endforeach
