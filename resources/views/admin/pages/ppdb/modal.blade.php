<!-- Modal Tambah-->
<div class="modal fade" id="add-tahun-ajaran" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Tambah Tahun Ajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('ppdb.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Nama TA</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Tanggal Awal Pendaftaran</label>
                            <input type="date" name="awal" class="form-control"
                                   placeholder="Masukkan Nama Guru" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Tanggal Akhir Pendaftaran</label>
                            <input type="date" name="akhir" class="form-control" placeholder="Masukkan Jabatan"
                                   required>
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

@foreach ($ajarans as $ajaran)
    @isset($ajaran->id)
        <!-- Modal Edit-->
        <div class="modal fade" id="edit-modal-{{ $ajaran->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Edit Tahun Ajaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('ppdb.update',$ajaran->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Nama TA</label>
                                    <input type="text" name="nama" class="form-control" value="{{ $ajaran->nama }}"
                                           required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Tanggal Awal Pendaftaran</label>
                                    <input type="date" name="awal" class="form-control"
                                           value="{{ $ajaran->awal }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Tanggal Akhir Pendaftaran</label>
                                    <input type="date" name="akhir" class="form-control" value="{{ $ajaran->akhir }}"
                                           required>
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

        <!-- Modal Delete -->
        <div class="modal fade" id="delete-modal-{{ $ajaran->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Tahun Ajaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form action="{{ route('ppdb.destroy', $ajaran->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $ajaran->id }}">
                        <div class="modal-body">
                            Anda yakin ingin menghapus Tahun Ajaran <b>{{ $ajaran->nama }}</b>
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
