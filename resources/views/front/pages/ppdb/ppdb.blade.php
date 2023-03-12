@extends('front.base')

@section('title', 'PPDB')
@section('content')
    <main>
        <!--? Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>PPDB</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Team Ara Start -->
        <div class="team-area pt-160 pb-160">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form class="form" action="{{route('front.ppdb.store')}}" method="POST" enctype="multipart/form-data" target="_blank">
                            @csrf
                            <div class="text-center my-3">
                                <h2>SISWA</h2>
                            </div>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama" id="nama">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <label class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                                <div class="col-sm-10 d-flex">
                                    <div class="form-check mx-3">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Pria">
                                        <label class="form-check-label" for="jenis_kelamin1">
                                            Pria
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Wanita">
                                        <label class="form-check-label" for="jenis_kelamin2">
                                            Wanita
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                                </div>
                            </div>
                                <div class="row mb-3">
                                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="berat_badan" id="berat_badan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="riwayat_penyakit" class="col-sm-2 col-form-label">Riwayat Penyakit <span>(opsional)</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="riwayat_penyakit" id="riwayat_penyakit">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_saudara" class="col-sm-2 col-form-label">Jumlah Saudara</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="jumlah_saudara" id="jumlah_saudara">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat" id="alamat">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_hp" class="col-sm-2 col-form-label">No HP Orang Tua/Wali</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="no_hp" id="no_hp">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nisn" id="nisn">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nik" id="nik">
                                    </div>
                                </div>
                                <div class="text-center my-3">
                                    <h2>Orang Tua</h2>
                                </div>
                                <h3>Ayah</h3>
                                <div class="row mb-3">
                                    <label for="nama_ayah" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_ayah" id="nama_ayah">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tanggal_lahir_ayah" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pendidikan_ayah" class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pendidikan_ayah" id="pendidikan_ayah">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah">
                                    </div>
                                </div>
                                <h3>Ibu</h3>
                                <div class="row mb-3">
                                    <label for="nama_ibu" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_ibu" id="nama_ibu">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tanggal_lahir_ibu" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pendidikan_ibu" class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pendidikan_ibu" id="pendidikan_ibu">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu">
                                    </div>
                                </div>
                                <h3>Wali <span>(opsional)</span></h3>
                                <div class="row mb-3">
                                    <label for="nama_wali" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_wali" id="nama_wali">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tanggal_lahir_wali" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal_lahir_wali" id="tanggal_lahir_wali">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pendidikan_wali" class="col-sm-2 col-form-label">Pendidikan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pendidikan_wali" id="pendidikan_wali">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pekerjaan_wali" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pekerjaan_wali" id="pekerjaan_wali">
                                    </div>
                                </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
    </main>
@endsection
