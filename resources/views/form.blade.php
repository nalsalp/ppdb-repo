<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR</title>
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>         
    <div class="container" style="padding-top:100px;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <center>
                        <h1>Form Pendaftaran Calon Siswa Peserta Didik Baru</h1>
                        <h3>SMK BAGIMU NEGERIKU SEMARANG</h3>
                        <h4>Tahun Ajaran 2022/2023</h4>
                        </center>
                    </div>
                <div class="card-body">
                    <form action="{{ url('/calonsiswa') }}" method="post">
                     @csrf
                        <div class="form-group">
                             <label for="nama_leng">Nama Lengkap</label>
                            <input
                            class="form-control @error('nik') is-invalid @enderror"
                            type="text" name="nama_leng" id="nama_leng" value="{{ old('nama_leng') }}">
                            @error('nama_leng')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="nama_pang">Nama panggilan</label>
                            <input
                            class="form-control @error('nama_pang') is-invalid @enderror"
                            type="text" name="nama_pang" id="nama_pang" value="{{ old('nama_pang') }}">
                            @error('nama_pang')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="email">Email</label>
                            <input
                            class="form-control @error('email') is-invalid @enderror"
                            type="text" name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="jk">Jenis Kelamin</label>
                            <input
                            class="form-control @error('jk') is-invalid @enderror"
                            type="text" name="jk" id="jk" value="{{ old('jk') }}">
                            @error('jk')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="tempat_lahir">Tempat Lahir</label>
                            <input
                            class="form-control @error('jk') is-invalid @enderror"
                            type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir') }}">
                            @error('tempat_lahir')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date"
                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                            type="text" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="alamat_ktp">Alamat KTP</label>
                            <input
                            class="form-control @error('alamat_ktp') is-invalid @enderror"
                            type="text" name="alamat_ktp" id="alamat_ktp" value="{{ old('alamat_ktp') }}" cols="30" row="2">
                            @error('alamat_ktp')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="alamat_tinggal">Alamat Tinggal</label>
                            <input
                            class="form-control @error('alamat_tinggal') is-invalid @enderror"
                            type="text" name="alamat_tinggal" id="alamat_tinggal" value="{{ old('alamat_tinggal') }}">
                            @error('alamat_tinggal')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="asal_sklh">Asal Sekolah</label>
                            <input
                            class="form-control @error('asal_sklh') is-invalid @enderror"
                            type="text" name="asal_sklh" id="asal_sklh" value="{{ old('asal_sklh') }}">
                            @error('asal_sklh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="j_1">Jurusan 1</label>
                             <select class="form-control @error('j_1') is-invalid @enderror" name="j_1" id="j_1">
                             <option value="{{ old('v') }}">{{ old('j_1') }}</option>
                                 <option value="TB">Tata Boga</option>
                                 <option value="MM">MultiMedia</option>
                                 <option value="RPL">Rekayasa Perangkat Lunak</option>
                                 <option value="BKP">Bisnis Kontruksi dan Properti</option>
                                 <option value="TKTO">Teknik Kendaraan Ringan Otomotif</option>
                             </select>
                            @error('j_1')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="j_1">Jurusan 2</label>
                             <select class="form-control @error('j_1') is-invalid @enderror" name="j_1" id="j_1">
                             <option value="{{ old('j_1') }}">{{ old('j_1') }}</option>
                                 <option value="TB">Tata Boga</option>
                                 <option value="MM">MultiMedia</option>
                                 <option value="RPL">Rekayasa Perangkat Lunak</option>
                                 <option value="BKP">Bisnis Kontruksi dan Properti</option>
                                 <option value="TKTO">Teknik Kendaraan Ringan Otomotif</option>
                             </select>
                            @error('j_1')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="kewarganegaraan">Kewarganegaraan</label>
                            <input
                            class="form-control @error('kewarganegaraan') is-invalid @enderror"
                            type="text" name="agama" id="agama" value="{{ old('kewarganegaraan') }}">
                            @error('kewarganegaraan')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="agama">Agama</label>
                            <input
                            class="form-control @error('agama') is-invalid @enderror"
                            type="text" name="agama" id="agama" value="{{ old('agama') }}">
                            @error('agama')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="tinggi_badan">Tinggi Badan</label>
                            <input
                            class="form-control @error('tinggi_badan') is-invalid @enderror"
                            type="text" name="tinggi_badan" id="tinggi_badan" value="{{ old('tinggi_badan') }}">
                            @error('tinggi_badan')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="berat_badan">Berat Badan</label>
                            <input
                            class="form-control @error('berat_badan') is-invalid @enderror"
                            type="text" name="berat_badan" id="berat_badan" value="{{ old('berat_badan') }}">
                            @error('berat_badan')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="umur">Umur</label>
                            <input
                            class="form-control @error('umur') is-invalid @enderror"
                            type="text" name="umur" id="umur" value="{{ old('umur') }}">
                            @error('umur')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="riwayat_peny">Riwayat Penyakit</label>
                            <input
                            class="form-control @error('riwayat_peny') is-invalid @enderror"
                            type="text" name="riwayat_peny" id="riwayat_peny" value="{{ old('riwayat_peny') }}">
                            @error('riwayat_peny')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="cita_cita">Cita-cita</label>
                            <input
                            class="form-control @error('cita_cita') is-invalid @enderror"
                            type="text" name="cita_cita" id="cita_cita" value="{{ old('cita_cita') }}">
                            @error('cita_cita')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hobi">Hobi</label>
                           <input
                           class="form-control @error('hobi') is-invalid @enderror"
                           type="text" name="hobi" id="hobi" value="{{ old('hobi') }}">
                           @error('hobi')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                        <div class="form-group">
                             <label for="no_telp">Nomor Telepon</label>
                            <input
                            class="form-control @error('no_telp') is-invalid @enderror"
                            type="text" name="no_telp" id="no_telp" value="{{ old('no_telp') }}">
                            @error('no_telp')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="anak_ke">Anak Ke-</label>
                            <input
                            class="form-control @error('anak_ke') is-invalid @enderror"
                            type="text" name="anak_ke" id="anak_ke" value="{{ old('anak_ke') }}">
                            @error('anak_ke')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="status_anak">Status</label>
                            <input
                            class="form-control @error('status') is-invalid @enderror"
                            type="text" name="status_anak" id="status_anak" value="{{ old('status_anak') }}">
                            @error('status_anak')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="gol_darah">Golongan Darah</label>
                            <input
                            class="form-control @error('gol_darah') is-invalid @enderror"
                            type="text" name="gol_darah" id="gol_darah" value="{{ old('gol_darah') }}">
                            @error('gol_darah')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="suku">Suku</label>
                            <input
                            class="form-control @error('suku') is-invalid @enderror"
                            type="text" name="suku" id="suku" value="{{ old('suku') }}">
                            @error('suku')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="prestasi">Prestasi Di Sekolah</label>
                            <input
                            class="form-control @error('prestasi') is-invalid @enderror"
                            type="text" name="prestasi" id="prestasi" value="{{ old('prestasi') }}">
                            @error('prestasi')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="bakat">Bakat</label>
                            <input
                            class="form-control @error('bakat') is-invalid @enderror"
                            type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                            @error('bakat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pel_disukai">Pelajaran Yang Disukai</label>
                           <input
                           class="form-control @error('pel_disukai') is-invalid @enderror"
                           type="text" name="pel_disukai" id="pel_disukai" value="{{ old('pel_disukai') }}">
                           @error('pel_disukai')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                        <div class="form-group">
                            <label for="nik">NIK</label>
                        <input
                        class="form-control @error('nik') is-invalid @enderror"
                        type="text" name="nik" id="nik" value="{{ old('nik') }}">
                        @error('nik')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                        <div class="form-group">
                            <label for="nisn">NISN</label>
                        <input
                        class="form-control @error('nisn') is-invalid @enderror"
                        type="text" name="nisn" id="nisn" value="{{ old('nisn') }}">
                        @error('nisn')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                            <div class="form-group">
                                <label for="ijazah">Ijazah</label>
                            <input
                            class="form-control @error('ijazah') is-invalid @enderror"
                            type="text" name="ijazah" id="ijazah" value="{{ old('ijazah') }}">
                            @error('ijazah')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="akta">Akta</label>
                            <input
                            class="form-control @error('akta') is-invalid @enderror"
                            type="text" name="akta" id="akta" value="{{ old('akta') }}">
                            @error('akta')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                                
                        <div class="form-group">
                            <label for="foto_diri">Foto Diri</label>
                            <input type="file" name="foto_diri" 
                            class="form-control @error('foto_diri') is-invalid @enderror"
                            type="text" name="foto_diri" id="foto_diri" value="{{ old('foto_diri') }}">
                            @error('foto_diri')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                            <div class="form-group">
                                <label for="foto_rumah">Foto Rumah</label>
                                <input type="file" name="foto_rumah" 
                                class="form-control @error('foto_rumah') is-invalid @enderror"
                                type="text" name="foto_rumah" id="foto_rumah" value="{{ old('foto_rumah') }}">
                                @error('foto_rumah')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        <div class="form-group">
                            <label for="foto_kel">Foto Keluarga</label><br>
                           <input type="file" name="foto_kel" 
                           class="form-control @error('foto_kel') is-invalid @enderror"
                           type="text" name="foto_kel" id="foto_kel" value="{{ old('foto_kel') }}">
                           @error('foto_kel')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>
                       

                       




                            <div class="form-group">
                                <label for="kis">Kartu Indonesia Sehat</label>
                                <input type="file" name="kis" 
                                class="form-control @error('kis') is-invalid @enderror"
                                type="text" name="kis" id="kis" value="{{ old('kis') }}">
                                @error('kis')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="form-group">
                                <label for="kip">Kartu Indonesia Pintar</label>
                                <input type="file" name="kip" 
                                class="form-control @error('kip') is-invalid @enderror"
                                type="text" name="kip" id="foto_kel" value="{{ old('kip') }}">
                                @error('kip')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        <div class="form-group">
                                <label for="sks">Surat Keterangan Sehat</label>
                                <input type="file" name="sks" 
                                class="form-control @error('sks') is-invalid @enderror"
                                type="text" name="sks" id="sks" value="{{ old('sks') }}">
                                @error('sks')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="skb">Surat Keterangan Baik</label>
                                <input type="file" name="skb" 
                                class="form-control @error('skb') is-invalid @enderror"
                                type="text" name="skb" id="skb" value="{{ old('skb') }}">
                                @error('skb')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="spp_sek">SPP Sekolah</label>
                             <input type="file" name="foto_kel" 
                           class="form-control @error('foto_kel') is-invalid @enderror"
                           type="text" name="foto_kel" id="foto_kel" value="{{ old('foto_kel') }}">
                           @error('foto_kel')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                            <div class="form-group">
                                <label for="sktm">Surat Keterangan Tidak Mampu</label>
                                <input type="file" name="sktm" 
                                class="form-control @error('sktm') is-invalid @enderror"
                                type="text" name="sktm" id="sktm" value="{{ old('sktm') }}">
                                @error('sktm')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="biaya_saudara">Biaya Saudara</label>
                            <input
                            class="form-control @error('biaya_saudara') is-invalid @enderror"
                            type="text" name="biaya_saudara" id="biaya_saudara" value="{{ old('biaya_saudara') }}">
                            @error('biaya_saudara')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>



                    




                        <div class="form-group">
                             <label for="nama_ayh">Nama Ayah</label>
                            <input
                            class="form-control @error('nama_ayh') is-invalid @enderror"
                            type="text" name="nama_ayh" id="nama_ayh" value="{{ old('nama_ayh') }}">
                            @error('nama_ayh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                           <input
                           class="form-control @error('nama_ibu') is-invalid @enderror"
                           type="text" name="nama_ibu" id="nama_ibu" value="{{ old('nama_ibu') }}">
                           @error('nama_ibu')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                        <div class="form-group">
                             <label for="pek_ayah">Pekerjaan Ayah</label>
                            <input
                            class="form-control @error('pek_ayah') is-invalid @enderror"
                            type="text" name="pek_ayah" id="pek_ayah" value="{{ old('pek_ayah') }}">
                            @error('pek_ayah')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                           <input
                           class="form-control @error('pekerjaan_ibu') is-invalid @enderror"
                           type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}">
                           @error('pekerjaan_ibu')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                        <div class="form-group">
                             <label for="asal_ayh">Asal Ayah</label>
                            <input
                            class="form-control @error('asal_ayh') is-invalid @enderror"
                            type="text" name="asal_ayh" id="asal_ayh" value="{{ old('asal_ayh') }}">
                            @error('asal_ayh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="asal_ibu">Asal Ibu</label>
                           <input
                           class="form-control @error('asal_ibu') is-invalid @enderror"
                           type="text" name="asal_ibu" id="asal_ibu" value="{{ old('asal_ibu') }}">
                           @error('asal_ibu')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                        <div class="form-group">
                             <label for="pend_ayh">Pendidikan Ayah</label>
                            <input
                            class="form-control @error('pend_ayh') is-invalid @enderror"
                            type="text" name="pend_ayh" id="pend_ayh" value="{{ old('pend_ayh') }}">
                            @error('pend_ayh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <label for="pend_ibu">Pendidikan Ibu</label>
                           <input
                           class="form-control @error('pend_ibu') is-invalid @enderror"
                           type="text" name="pend_ibu" id="pend_ibu" value="{{ old('pend_ibu') }}">
                           @error('pend_ibu')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                            <div class="form-group">
                                <label for="tempat_lahir_ayh">Tempat Lahir Ayah</label>
                            <input type="date"
                            class="form-control @error('tempat_lahir_ayh') is-invalid @enderror"
                            type="text" name="tempat_lahir_ayh" id="tempat_lahir_ayh" value="{{ old('tempat_lahir_ayh') }}">
                            @error('tempat_lahir_ayh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                            <input type="date"
                            class="form-control @error('tempat_lahir_ibu') is-invalid @enderror"
                            type="text" name="tempat_lahir_ibu" id="tempat_lahir_ibu" value="{{ old('tempat_lahir_ibu') }}">
                            @error('tempat_lahir_ibu')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="tgl_lahir_ayh">Tanggal Lahir Ayah</label>
                            <input type="date"
                            class="form-control @error('tgl_lahir_ayh') is-invalid @enderror"
                            type="text" name="tgl_lahir_ayh" id="tgl_lahir_ayh" value="{{ old('tgl_lahir_ayh') }}">
                            @error('tgl_lahir_ayh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir_ibu">Tanggal Lahir Ibu</label>
                        <input type="date"
                        class="form-control @error('tgl_lahir_ibu') is-invalid @enderror"
                        type="text" name="tgl_lahir_ibu" id="tgl_lahir_ibu" value="{{ old('tgl_lahir_ibu') }}">
                        @error('tgl_lahir_ibu')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                            

                

                        <div class="form-group">
                             <label for="agama_ayh">Agama Ayah</label>
                            <input
                            class="form-control @error('agama_ayh') is-invalid @enderror"
                            type="text" name="agama_ayh" id="agama_ayh" value="{{ old('agama_ayh') }}">
                            @error('agama_ayh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <label for="agama_ibu">Agama Ibu</label>
                           <input
                           class="form-control @error('agama_ibu') is-invalid @enderror"
                           type="text" name="agama_ibu" id="agama_ibu" value="{{ old('agama_ibu') }}">
                           @error('agama_ibu')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                        <div class="form-group">
                             <label for="usia_ayh">Usia Ayah</label>
                            <input
                            class="form-control @error('usia_ayh') is-invalid @enderror"
                            type="text" name="usia_ayh" id="usia_ayh" value="{{ old('usia_ayh') }}">
                            @error('usia_ayh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="usia_ibu">Usia Ibu</label>
                           <input
                           class="form-control @error('usia_ibu') is-invalid @enderror"
                           type="text" name="usia_ibu" id="usia_ibu" value="{{ old('usia_ibu') }}">
                           @error('usia_ibu')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>


                        

                        <div class="form-group">
                             <label for="no_telp_ayh">Nomor Telepon Ayah</label>
                            <input
                            class="form-control @error('no_telp_ayh') is-invalid @enderror"
                            type="text" name="no_telp_ayh" id="no_telp_ayh" value="{{ old('no_telp_ayh') }}">
                            @error('no_telp_ayh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="no_telp_ibu">Nomor Telepon Ibu</label>
                           <input
                           class="form-control @error('no_telp_ibu') is-invalid @enderror"
                           type="text" name="no_telp_ibu" id="no_telp_ibu" value="{{ old('no_telp_ibu') }}">
                           @error('no_telp_ibu')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                        <div class="form-group">
                             <label for="peng_ayh">Penghasilan/Bulan Ayah</label>
                            <input
                            class="form-control @error('peng_ayh') is-invalid @enderror"
                            type="text" name="peng_ayh" id="peng_ayh" value="{{ old('peng_ayh') }}">
                            @error('peng_ayh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="peng_ibu">Penghasilan/Bulan Ibu</label>
                           <input
                           class="form-control @error('peng_ibu') is-invalid @enderror"
                           type="text" name="peng_ibu" id="peng_ibu" value="{{ old('peng_ibu') }}">
                           @error('peng_ibu')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>


                        
                      

                       

                        

                        


                    <button class="btn btn-primary" type="submit">Daftar</button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html> 