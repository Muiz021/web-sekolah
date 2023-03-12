<!DOCTYPE html>
<html>

<head>
    <title>Kartu Peserta Seleksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .kartu-peserta-seleksi {
            padding: 16px;
            width: 100%;
            height: 100%;
            border: 1px solid black;
        }

        .kartu-peserta-seleksi p {
            font-size: 8pt;
        }

        .kartu-peserta-seleksi td,
        .kartu-peserta-seleksi .footer-wrapper p {
            font-size: 9.5pt;
        }

        .kartu-peserta-seleksi .head-wrapper {
            display: flex;
            padding: 8pt;
            flex-direction: row;
            margin: -16px -16px 0;
            align-items: center;
            justify-content: center;
            border-bottom: 2px solid black;
        }

        .kartu-peserta-seleksi .head-wrapper .sec {
            width: 250px;
            text-align: center;
        }

        .kartu-peserta-seleksi .head-wrapper .sec:nth-child(2) {
            flex: 1;
        }

        .kartu-peserta-seleksi .head-wrapper img {
            height: 50px;
        }

        .kartu-peserta-seleksi .head-wrapper .sec:last-child {
            font-weight: 900;
        }

        .kartu-peserta-seleksi .head-wrapper .sec:nth-child(-1n+3) p {
            margin-bottom: 0;
        }

        .kartu-peserta-seleksi .head-wrapper .sec:nth-child(2) p:nth-child(-n+3) {
            font-weight: bold
        }

        .kartu-peserta-seleksi .content-wrapper {
            padding: 16px 0;
            display: flex;
        }
        .kartu-peserta-seleksi .content-wrapper .ini-table {
            width: 80%;
        }
        .kartu-peserta-seleksi .content-wrapper .profil-img{
            width: 20%;
            display: flex;
            justify-content: center;
            height: 100%;
        }

        .kartu-peserta-seleksi .content-wrapper tr td:nth-child(2) {
            width: 15px;
            text-align: center;
        }

        .kartu-peserta-seleksi .footer-wrapper {
            text-align: right;
        }

        .kartu-peserta-seleksi .footer-wrapper p {
            margin-bottom: 0
        }
    </style>
</head>

<body>
    <div class="kartu-peserta-seleksi-wrapper">
        <div class="kartu-peserta-seleksi">
            <div class="head-wrapper">
                <div class="sec">
                    <h5>No. Registrasi <strong>{{\Carbon\Carbon::now()->format('y')}}1-{{str_pad($ppdb->count(),5,'0',STR_PAD_LEFT)}}</strong></h3>
                </div>
                <div class="sec">
                    <p>KARTU PESERTA</p>
                    <p>SELEKSI MASUK MTs</p>
                    <p>LANGUAGE INSAN MANDIRI</p>
                    <p>TAHUN PELAJARAN {{\Carbon\Carbon::now()->format('Y')}}/{{\Carbon\Carbon::now()->addYear(1)->format('Y')}}</p>
                </div>
                <div class="sec"><img  src="{{ asset('front/img/logo/logo.png') }}" width="80px" alt="MA KHAS KEMPEK"></div>

            </div>
            <div class="content-wrapper">
               <div class="ini-table">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <h5>Data Siswa</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{$ppdb->nama}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{$ppdb->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                            <td>TTL</td>
                            <td>:</td>
                            <td>{{$ppdb->tempat_lahir}}, {{\Carbon\Carbon::parse($ppdb->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
                        </tr>
                        <tr>
                            <td>Berat Badan</td>
                            <td>:</td>
                            <td>{{$ppdb->berat_badan}}</td>
                        </tr>
                        <tr>
                            <td>Tinggi Badan</td>
                            <td>:</td>
                            <td>{{$ppdb->tinggi_badan}}</td>
                        </tr>
                        @if($ppdb->riwayat_penyakit != null)
                        <tr>
                            <td>Riwayat Penyakit</td>
                            <td>:</td>
                            <td>{{$ppdb->riwayat_penyakit}}</td>
                        </tr>
                        @endif
                        <tr>
                            <td>Jumlah Saudara</td>
                            <td>:</td>
                            <td>{{$ppdb->jumlah_saudara}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{$ppdb->alamat}}</td>
                        </tr>
                        <tr>
                            <td>No Hp</td>
                            <td>:</td>
                            <td>{{$ppdb->no_hp}}</td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td>{{$ppdb->asal_sekolah}}</td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td>{{$ppdb->nisn}}</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td>{{$ppdb->nik}}</td>
                        </tr>
                        <tr>
                            <td>
                                <h5>Data Orang Tua/Wali</h5>
                            </td>
                        </tr>
                        @if($ppdb->nama_ayah != null)
                        <tr>
                            <td>Nama Ayah</td>
                            <td>:</td>
                            <td>{{$ppdb->nama_ayah}}</td>
                        </tr>
                        @endif
                        @if($ppdb->tanggal_lahir_ayah != null)
                        <tr>
                            <td>Tanggal Lahir Ayah</td>
                            <td>:</td>
                            <td>{{\Carbon\Carbon::parse($ppdb->tanggal_lahir_ayah)->isoFormat('D MMMM Y')}}</td>
                        </tr>
                        @endif
                        @if($ppdb->pendidikan_ayah != null)
                        <tr>
                            <td>Pendidikan Ayah</td>
                            <td>:</td>
                            <td>{{$ppdb->pendidikan_ayah}}</td>
                        </tr>
                        @endif
                        @if($ppdb->pekerjaan_ayah != null)
                        <tr>
                            <td>Pekerjaan Ayah</td>
                            <td>:</td>
                            <td>{{$ppdb->pekerjaan_ayah}}</td>
                        </tr>
                        @endif
                        @if($ppdb->nama_ibu != null)
                        <tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td>{{$ppdb->nama_ibu}}</td>
                        </tr>
                        @endif
                        @if($ppdb->tanggal_lahir_ibu != null)
                        <tr>
                            <td>Tanggal Lahir Ibu</td>
                            <td>:</td>
                            <td>{{\Carbon\Carbon::parse($ppdb->tanggal_lahir_ibu)->isoFormat('D MMMM Y')}}</td>
                        </tr>
                        @endif
                        @if($ppdb->pendidikan_ibu != null)
                        <tr>
                            <td>Pendidikan Ibu</td>
                            <td>:</td>
                            <td>{{$ppdb->pendidikan_ibu}}</td>
                        </tr>
                        @endif
                        @if($ppdb->pekerjaan_ibu != null)
                        <tr>
                            <td>Pekerjaan Ibu</td>
                            <td>:</td>
                            <td>{{$ppdb->pekerjaan_ibu}}</td>
                        </tr>
                        @endif
                        @if($ppdb->nama_wali != null)
                        <tr>
                            <td>Nama Wali</td>
                            <td>:</td>
                            <td>{{$ppdb->nama_wali}}</td>
                        </tr>
                        @endif
                        @if($ppdb->tanggal_lahir_wali != null)
                        <tr>
                            <td>Tanggal Lahir Wali</td>
                            <td>:</td>
                            <td>{{\Carbon\Carbon::parse($ppdb->tanggal_lahir_wali)->isoFormat('D MMMM Y')}}</td>
                        </tr>
                        @endif
                        @if($ppdb->pendidikan_wali != null)
                        <tr>
                            <td>Pendidikan Wali</td>
                            <td>:</td>
                            <td>{{$ppdb->pendidikan_wali}}</td>
                        </tr>
                        @endif
                        @if($ppdb->pekerjaan_wali != null)
                        <tr>
                            <td>Pekerjaan Wali</td>
                            <td>:</td>
                            <td>{{$ppdb->pekerjaan_wali}}</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
               </div>
               <div class="profil-img">
                <div class="table">

                </div>
               </div>
            </div>
            <div class="footer-wrapper">
                <p>Raja Ampat, {{\Carbon\Carbon::now()->isoFormat('D MMMM Y')}}</p>
                <p>Kepala MTs. Language insan mandiri</p>
                <br><br>
                <p><strong>M. Farid Wijayanto, S.Kom</strong></p>
            </div>
        </div>
    </div>
</body>

</html>
