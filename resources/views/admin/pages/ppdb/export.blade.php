<table>
    <thead>
    <tr>
        <td>Nama</td>
        <td>Jenis Kelamin</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>Tinggi Badan</td>
        <td>Berat Badan</td>
        <td>Riwayat Penyakit (opsional)</td>
        <td>Jumlah Saudara</td>
        <td>Alamat</td>
        <td>No HP Orang Tua/Wali</td>
        <td>Asal Sekolah</td>
        <td>NISN</td>
        <td>NIK</td>
        <td>Nama Ayah</td>
        <td>Tanggal Lahir Ayah</td>
        <td>Pendidikan Ayah</td>
        <td>Pekerjaan Ayah</td>
        <td>Nama Ibu</td>
        <td>Tanggal Lahir Ibu</td>
        <td>Pendidikan Ibu</td>
        <td>Pekerjaan Ibu</td>
        <td>Nama Wali</td>
        <td>Tanggal Lahir Wali</td>
        <td>Pendidikan Wali</td>
        <td>Pekerjaan Wali</td>
    </tr>
    </thead>
    <tbody>
    @foreach($ppdbs as $ppdb)
        <tr>
            <td>{{ $ppdb->nama }}</td>
            <td>{{ $ppdb->jenis_kelamin }}</td>
            <td>{{ $ppdb->tempat_lahir }}</td>
            <td>{{ $ppdb->tanggal_lahir }}</td>
            <td>{{ $ppdb->berat_badan }}</td>
            <td>{{ $ppdb->tinggi_badan }}</td>
            <td>{{ $ppdb->riwayat_penyakit }}</td>
            <td>{{ $ppdb->jumlah_saudara }}</td>
            <td>{{ $ppdb->alamat }}</td>
            <td>{{ $ppdb->no_hp }}</td>
            <td>{{ $ppdb->asal_sekolah }}</td>
            <td>{{ $ppdb->nisn }}</td>
            <td>{{ $ppdb->nik }}</td>
            <td>{{ $ppdb->nama_ayah }}</td>
            <td>{{ $ppdb->tanggal_lahir_ayah }}</td>
            <td>{{ $ppdb->pendidikan_ayah }}</td>
            <td>{{ $ppdb->pekerjaan_ayah }}</td>
            <td>{{ $ppdb->nama_ibu }}</td>
            <td>{{ $ppdb->tanggal_lahir_ibu }}</td>
            <td>{{ $ppdb->pendidikan_ibu }}</td>
            <td>{{ $ppdb->pekerjaan_ibu }}</td>
            <td>{{ $ppdb->nama_wali }}</td>
            <td>{{ $ppdb->tanggal_lahir_wali }}</td>
            <td>{{ $ppdb->pendidikan_wali }}</td>
            <td>{{ $ppdb->pekerjaan_wali }}</td>
        </tr>
    @endforeach
    </tbody>
</table>