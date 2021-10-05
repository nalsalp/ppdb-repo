<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:)</title>
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>P P D B</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>
 
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama Lengkap</td>
                                <td>{{ $data->nama_leng }}</td>
                            </tr>
                            <tr>
                                <td>Nama Panggilan</td>
                                <td>{{ $data->nama_pang }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <td>Tempat Tinggal</td>
                                <td>{{ $data->tempat_tinggal }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>{{ $data->tgl_lahir }}</td>
                            </tr>
                            <tr>
                                <td>Alamat KTP</td>
                                <td>{{ $data->alamat_ktp }}</td>
                            </tr>
                            <tr>
                                <td>Alamat Tinggal</td>
                                <td>{{ $data->alamat_tinggal }}</td>
                            </tr>
                            <tr>
                                <td>Asal Sekolah</td>
                                <td>{{ $data->asal_sklh }}</td>
                            </tr>
                            <tr>
                                <td>Jurusan 1</td>
                                <td>{{ $data->j_1 }}</td>
                            </tr>
                            <tr>
                                <td>Jurusan 2</td>
                                <td>{{ $data->j_2 }}</td>
                            </tr>
                            <tr>
                                <td>Kewarganegaraan</td>
                                <td>{{ $data->kewarganegaraan }}</td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td>{{ $data->agama}}</td>
                            </tr>
                            <tr>
                                <td>Tinggi Badan</td>
                                <td>{{ $data->tinggi_badan }}</td>
                            </tr>
                            <tr>
                                <td>Berat Badan</td>
                                <td>{{ $data->berat_badan }}</td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>{{ $data->umur }}</td>
                            </tr><tr>
                                <td>Riwayat Penyakit</td>
                                <td>{{ $data->riwayat_peny }}</td>
                            </tr>
                            <tr>
                                <td>Cita-cita</td>
                                <td>{{ $data->cita_cita }}</td>
                            </tr>
                            <tr>
                                <td>Hobi</td>
                                <td>{{ $data->hobi }}</td>
                            </tr>
                            <tr>
                                <td>No Telpon</td>
                                <td>{{ $data->no_telp }}</td>
                            </tr>
                            <tr>
                                <td>Anak ke-</td>
                                <td>{{ $data->anak_ke }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{ $data->status_anak }}</td>
                            </tr>
                            <tr>
                                <td>Golongan Darah</td>
                                <td>{{ $data->gol_darah }}</td>
                            </tr>
                            <tr>
                                <td>Suku</td>
                                <td>{{ $data->suku }}</td>
                            </tr>
                            <tr>
                                <td>Prestasi Di Sekolah</td>
                                <td>{{ $data->prestasi}}</td>
                            </tr>
                            <tr>
                                <td>Bakat</td>
                                <td>{{ $data->bakat}}</td>
                            </tr>
                            <tr>
                                <td>Pelajaran Disukai</td>
                                <td>{{ $data->pel_disukai }}</td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>{{ $data->nik}}</td>
                            </tr>
                            <tr>
                                <td>NISN</td>
                                <td>{{ $data->nisn }}</td>
                            </tr>
                            <tr>
                                <td>Ijazah</td>
                                <td>{{ $data->ijazah }}</td>
                            </tr>
                            <tr>
                                <td>Akta Kelahiran</td>
                                <td>{{ $data->akta }}</td>
                            </tr>
                            <tr>
                                <td>Foto Diri</td>
                                <td>{{ $data->foto_diri }}</td>
                            </tr>
                            <tr>
                                <td>Foto Rumah</td>
                                <td>{{ $data->foto_rumah}}</td>
                            </tr>
                            <tr>
                                <td>Foto Keluarga</td>
                                <td>{{ $data->foto_keluarga }}</td>
                            </tr>
                            <tr>
                                <td>Kartu Indonesia Sehat</td>
                                <td>{{ $data->kis }}</td>
                            </tr>
                            <tr>
                                <td>Kartu Indonesia Pintar</td>
                                <td>{{ $data->kip }}</td>
                            </tr>
                            <tr>
                                <td>Surat Keterangan Sehat</td>
                                <td>{{ $data->sks }}</td>
                            </tr>
                            <tr>
                                <td>Surat Keterangan Baik</td>
                                <td>{{ $data->skb }}</td>
                            </tr>
                            <tr>
                                <td>SPP Sekolah</td>
                                <td>{{ $data->spp_sek }}</td>
                            </tr>
                            <tr>
                                <td>Surat Keterangan Tidak Mampu</td>
                                <td>{{ $data->sktm }}</td>
                            </tr>
                            <tr>
                                <td>Biaya Saudara</td>
                                <td>{{ $data->biaya_saudara }}</td>
                            </tr>
                            
                            
                            <tr>
                                <td>Nama Ayah</td>
                                <td>{{ $data->nama_ayh }}</td>
                            </tr>
                            <tr>
                                <td>Nama Ibu</td>
                                <td>{{ $data->nama_ibu }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Ayah</td>
                                <td>{{ $data->pek_ayh }}</td>
                            </tr>
                            <tr>
                                <td>Pekerjaan Ibu</td>
                                <td>{{ $data->pek_ibu }}</td>
                            </tr>
                            <tr>
                                <td>Asal Ayah</td>
                                <td>{{ $data->asal_ayh }}</td>
                            </tr>
                            <tr>
                                <td>Asal Ibu</td>
                                <td>{{ $data->asal_ibu }}</td>
                            </tr>
                            <tr>
                                <td>Pendidikan Ayah</td>
                                <td>{{ $data->pend_ayh }}</td>
                            </tr>
                            <tr>
                                <td>Pendidikan Ibu</td>
                                <td>{{ $data->pend_ibu }}</td>
                            </tr>
                             <tr>
                                <td>Tempat Lahir Ayah</td>
                                <td>{{ $data->tempat_lahir_ayh }}</td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir Ibu</td>
                                <td>{{ $data->tempat_lahir_ibu }}</td>
                            </tr>
                            
                            <tr>
                                <td>Tanggal Lahir Ayah</td>
                                <td>{{ $data->tgl_lahir_ayh }}</td>
                            </tr>
                            
                            <tr>
                                <td>Tanggal Lahir Ibu</td>
                                <td>{{ $data->tgl_lahir_ibu }}</td>
                            </tr>
                            <tr>
                                <td>Agama Ayah</td>
                                <td>{{ $data->agama_ayh }}</td>
                            </tr>
                            
                            <tr>
                                <td>agama Ibu</td>
                                <td>{{ $data->agama_ibu }}</td>
                            </tr>
                            
                            <tr>
                                <td>Usia Ayah</td>
                                <td>{{ $data->usia_ayh }}</td>
                            </tr>
                            <tr>
                                <td>Usia Ibu</td>
                                <td>{{ $data->usia_ibu }}</td>
                            </tr>
                            <tr>
                                <td>No Telpon Ayah</td>
                                <td>{{ $data->no_telp_ayh }}</td>
                            </tr>
                            <tr>
                                <td>No Telpon Ibu</td>
                                <td>{{ $data->no_telp_ibu }}</td>
                            </tr>
                            <tr>
                                <td>Penghasilan/Bulan Ayah</td>
                                <td>{{ $data->peng_ayh }}</td>
                            </tr>
                            <tr>
                                <td>Penghasilan/Bulan Ibu</td>
                                <td>{{ $data->peng_ibu }}</td>
                            </tr>
                            


                            </table>
 
                        <a href="/Form" class="btn btn-dark">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>