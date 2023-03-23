<!DOCTYPE html>
<html>

<head>
    <title>Kartu Peserta Seleksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    {{-- <style>
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
        .kartu-peserta-seleksi .content-wrapper .profil-img .card{
            width: 150px;
            height: 200px;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
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
    </style> --}}
    <style>
        body{
            padding: 0;
            margin: 0;
        }
    .kartu-peserta-seleksi-wrapper{
        width: 100%;
    }
    .kartu-peserta-seleksi-wrapper .head-wrapper tr td p{
        text-align: center;
    }
    .kartu-peserta-seleksi-wrapper .content-wrapper .profil-img .card{
        width: 80%;
        height: 180px;
        text-align: center;
    }
    .kartu-peserta-seleksi-wrapper .content-wrapper .profil-img p{
        margin:auto 0;
    }
    .kartu-peserta-seleksi-wrapper .footer-wrapper p{
        text-align: right;
        padding: 20px;
    }
    </style>
</head>

<body>
    <div class="kartu-peserta-seleksi-wrapper">
        <div class="kartu-peserta-seleksi">
            <div class="head-wrapper">
                <table width="100%">
                    <tr>
                        <td width="20%"><p>No. Registrasi <strong>{{\Carbon\Carbon::now()->format('y')}}1-{{str_pad($ppdb->antrian,3,'0',STR_PAD_LEFT)}}</strong></p></td>
                        <td width="60%" class="text-kop">
                            <p><b>
                                KARTU PESERTA<br>
                                SELEKSI MASUK MTs<br>
                                LANGUAGE INSAN MANDIRI<br>
                                TAHUN PELAJARAN {{\Carbon\Carbon::now()->format('Y')}}/{{\Carbon\Carbon::now()->addYear(1)->format('Y')}}</b></p>
                            </td>
                        <td width="20%"><img  src="{{ asset('front/img/logo/logo.png') }}" width="80px" alt="MA KHAS KEMPEK"></td>
                    </tr>
                </table>
            </div>

            <div class="content-wrapper">
               <div class="ini-table">
                <table width="100%">
                  <tr>
                    <td width="80%">
                        <table width="100%">
                            <tbody>
                                <tr>
                                    <td colspan="3">
                                        <h5>Data Siswa</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">Nama</td>
                                    <td width="3%">:</td>
                                    <td width="77%">{{$ppdb->nama}}</td>
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
                            </tbody>
                        </table>
                    </td>
                    <td width="20%">
                        <div class="profil-img">
                            <div class="card">
                                <p>3x4</p>
                            </div>
                           </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                        <div class="footer-wrapper">
                            <p>Raja Ampat, {{\Carbon\Carbon::now()->isoFormat('D MMMM Y')}} <br>
                                Kepala MTs. Language insan mandiri</p>
                            <br><br>
                            <p><strong>M. Farid Wijayanto, S.Kom</strong></p>
                        </div>
                    </td>
                  </tr>
                </table>
               </div>
            </div>
        </div>
    </div>
</body>

</html>
