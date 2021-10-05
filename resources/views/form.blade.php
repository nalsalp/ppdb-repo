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
                            class="form-control @error('nama') is-invalid @enderror"
                            type="text" name="nama" id="nama" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="email">Email</label>
                            <input
                            class="form-control @error('nama_panggilan') is-invalid @enderror"
                            type="text" name="nama_panggilan" id="nama_panggilan" value="{{ old('nama_panggilan') }}">
                            @error('nama_panggilan')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="jk">Jenis Kelamin</label>
                            <select class="form-control @error('jk') is-invalid @enderror" name="jk" id="jk">
                             <option value="{{ old('jk') }}">{{ old('jk') }}</option>
                             <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('Jenis-kelamin')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="tempat_lahir">Tempat Lahir</label>
                            <input
                            class="form-control @error('jk') is-invalid @enderror"
                            type="text" name="jk" id="jk" value="{{ old('jk') }}">
                            @error('jk')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date"
                            class="form-control @error('ttl') is-invalid @enderror"
                            type="text" name="ttl" id="ttl" value="{{ old('ttl') }}">
                            @error('ttl')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="alamat_ktp">Alamat KTP</label>
                            <input
                            class="form-control @error('alamat') is-invalid @enderror"
                            type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" cols="30" row="2">
                            @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="alamat_tinggal">Alamat Tinggal</label>
                            <input
                            class="form-control @error('asal_sekolah') is-invalid @enderror"
                            type="text" name="asal_sekolah" id="asal_sekolah" value="{{ old('asal_sekolah') }}">
                            @error('asal_sekolah')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="asal_sklh">Asal Sekolah</label>
                            <input
                            class="form-control @error('nisn') is-invalid @enderror"
                            type="text" name="nisn" id="nisn" value="{{ old('nisn') }}">
                            @error('nisn')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="j_1">Jurusan 1</label>
                             <select class="form-control @error('jurusan1') is-invalid @enderror" name="jurusan1" id="jurusan1">
                             <option value="{{ old('jurusan1') }}">{{ old('jurusan1') }}</option>
                                 <option value="TB">Tata Boga</option>
                                 <option value="MM">MultiMedia</option>
                                 <option value="RPL">Rekayasa Perangkat Lunak</option>
                                 <option value="BKP">Bisnis Kontruksi dan Properti</option>
                                 <option value="TKTO">Teknik Kendaraan Ringan Otomotif</option>
                             </select>
                            @error('jurusan1')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="j_2">Jurusan 2</label>
                             <select class="form-control @error('jurusan2') is-invalid @enderror" name="jurusan2" id="jurusan2">
                             <option value="{{ old('jurusan2') }}">{{ old('jurusan2') }}</option>
                                 <option value="TB">Tata Boga</option>
                                 <option value="MM">MultiMedia</option>
                                 <option value="RPL">Rekayasa Perangkat Lunak</option>
                                 <option value="BKP">Bisnis Kontruksi dan Properti</option>
                                 <option value="TKTO">Teknik Kendaraan Ringan Otomotif</option>
                             </select>
                            @error('jurusan2')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="ewarganegaraan">Kewarganegaraan</label>
                            <input
                            class="form-control @error('agama') is-invalid @enderror"
                            type="text" name="agama" id="agama" value="{{ old('agama') }}">
                            @error('agama')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                
                        <div class="form-group">
                             <label for="j_2">Agama</label>
                             <select class="form-control @error('agama') is-invalid @enderror" name="agama" id="agama">
                             <option value="{{ old('agama') }}">{{ old('agama') }}</option>
                                 <option value="TB">Kristen</option>
                                 <option value="MM">Katholik</option>
                                 <option value="RPL">Islam</option>
                                 <option value="BKP">Hindu</option>
                                 <option value="TKTO">Budha</option>
                             </select>
                            @error('jurusan2')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                             <label for="tinggi_badan">Tinggi Badan</label>
                            <input
                            class="form-control @error('berat') is-invalid @enderror"
                            type="text" name="berat" id="berat" value="{{ old('berat') }}">
                            @error('berat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="berat_badan">Berat Badan</label>
                            <input
                            class="form-control @error('umur') is-invalid @enderror"
                            type="text" name="umur" id="umur" value="{{ old('umur') }}">
                            @error('umur')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="umur">Umur</label>
                            <input
                            class="form-control @error('riwayat_penyakit') is-invalid @enderror"
                            type="text" name="riwayat_penyakit" id="riwayat_penyakit" value="{{ old('riwayat_penyakit') }}">
                            @error('riwayat_penyakit')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="riwayat_peny">Riwayat Penyakit</label>
                            <input
                            class="form-control @error('cita_cita') is-invalid @enderror"
                            type="text" name="cita_cita" id="cita_cita" value="{{ old('cita_cita') }}">
                            @error('cita_cita')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="cita_cita">Cita-cita</label>
                            <input
                            class="form-control @error('hobi') is-invalid @enderror"
                            type="text" name="hobi" id="hobi" value="{{ old('hobi') }}">
                            @error('hobi')
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
                            type="text" name="status" id="status" value="{{ old('status') }}">
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                             <label for="gol_darah">Golongan Darah</label>
                            <input
                            class="form-control @error('golongan_darah') is-invalid @enderror"
                            type="text" name="golongan_darah" id="golongan_darah" value="{{ old('golongan_darah') }}">
                            @error('golongan_darah')
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
                           class="form-control @error('bakat') is-invalid @enderror"
                           type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                           @error('bakat')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                        <div class="form-group">
                            <label for="nik">NIK</label>
                        <input
                        class="form-control @error('bakat') is-invalid @enderror"
                        type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                        @error('bakat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                        <div class="form-group">
                            <label for="nisn">NISN</label>
                        <input
                        class="form-control @error('bakat') is-invalid @enderror"
                        type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                        @error('bakat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                            <div class="form-group">
                                <label for="ijazah">Ijazah</label>
                            <input
                            class="form-control @error('bakat') is-invalid @enderror"
                            type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                            @error('bakat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="akta">Akta</label>
                            <input
                            class="form-control @error('bakat') is-invalid @enderror"
                            type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                            @error('bakat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                                
                        <div class="form-group">
                            <label for="foto_diri">Foto Diri</label>
                            <input type="file" name="gambar" 
                            class="form-control @error('fto_kk') is-invalid @enderror"
                            type="text" name="fto_kk" id="fto_kk" value="{{ old('fto_kk') }}">
                            @error('fto_kk')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="foto_rumah">Foto Rumah</label>
                                <input type="file" name="gambar" 
                                class="form-control @error('fto_kk') is-invalid @enderror"
                                type="text" name="fto_kk" id="fto_kk" value="{{ old('fto_kk') }}">
                                @error('fto_kk')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        <div class="form-group">
                            <label for="foto_kel">Foto KARTU Keluarga</label><br>
                           <input type="file" name="gambar" 
                           class="form-control @error('fto_kk') is-invalid @enderror"
                           type="text" name="fto_kk" id="fto_kk" value="{{ old('fto_kk') }}">
                           @error('fto_kk')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>
                            <div class="form-group">
                                <label for="kis">Kartu Indonesia Sehat</label>
                            <input
                            class="form-control @error('bakat') is-invalid @enderror"
                            type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                            @error('bakat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                           </div>
                        <div class="form-group">
                                <label for="kip">Kartu Indonesia Pintar</label>
                            <input
                            class="form-control @error('bakat') is-invalid @enderror"
                            type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                            @error('bakat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                                <label for="sks">Surat Keterangan Sehat</label>
                            <input
                            class="form-control @error('bakat') is-invalid @enderror"
                            type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                            @error('bakat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="skb">Surat Keterangan Baik</label>
                            <input
                            class="form-control @error('bakat') is-invalid @enderror"
                            type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                            @error('bakat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="spp_sek">SPP Sekolah</label>
                            <input
                            class="form-control @error('bakat') is-invalid @enderror"
                            type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                            @error('bakat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="sktm">Surat Keterangan Tidak Mampu</label>
                            <input
                            class="form-control @error('bakat') is-invalid @enderror"
                            type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                            @error('bakat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="biaya_saudara">Biaya Saudara</label>
                            <input
                            class="form-control @error('bakat') is-invalid @enderror"
                            type="text" name="bakat" id="bakat" value="{{ old('bakat') }}">
                            @error('bakat')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                             <label for="nama_ayh">Nama Ayah</label>
                            <input
                            class="form-control @error('nama_ayah') is-invalid @enderror"
                            type="text" name="nama_ayah" id="nama_ayah" value="{{ old('nama_ayah') }}">
                            @error('nama_ayah')
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
                             <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                            <input
                            class="form-control @error('pekerjaan_ayah') is-invalid @enderror"
                            type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}">
                            @error('pekerjaan_ayah')
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
                             <label for="asal_ayah">Asal Ayah</label>
                            <input
                            class="form-control @error('asal_ayah') is-invalid @enderror"
                            type="text" name="asal_ayah" id="asal_ayah" value="{{ old('asal_ayah') }}">
                            @error('asal_ayah')
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
                            class="form-control @error('lulusan_ayah') is-invalid @enderror"
                            type="text" name="lulusan_ayah" id="lulusan_ayah" value="{{ old('lulusan_ayah') }}">
                            @error('lulusan_ayah')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pend_ibu">Pendidikan Ibu</label>
                           <input
                           class="form-control @error('lulusan_ibu') is-invalid @enderror"
                           type="text" name="lulusan_ibu" id="lulusan_ibu" value="{{ old('lulusan_ibu') }}">
                           @error('lulusan_ibu')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>

                            <div class="form-group">
                                <label for="tempat_lahir_ayh">Tempat Lahir Ayah</label>
                            <input type="date"
                            class="form-control @error('ttl_ayah') is-invalid @enderror"
                            type="text" name="ttl_ayah" id="ttl_ayah" value="{{ old('ttl_ayah') }}">
                            @error('ttl_ayah')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                            <input type="date"
                            class="form-control @error('ttl_ayah') is-invalid @enderror"
                            type="text" name="ttl_ayah" id="ttl_ayah" value="{{ old('ttl_ayah') }}">
                            @error('ttl_ayah')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                            <div class="form-group">
                                <label for="tgl_lahir_ayh">Tanggal Lahir Ayah</label>
                            <input type="date"
                            class="form-control @error('ttl_ayah') is-invalid @enderror"
                            type="text" name="ttl_ayah" id="ttl_ayah" value="{{ old('ttl_ayah') }}">
                            @error('ttl_ayah')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir_ibu">Tanggal Lahir Ibu</label>
                        <input type="date"
                        class="form-control @error('ttl_ayah') is-invalid @enderror"
                        type="text" name="ttl_ayah" id="ttl_ayah" value="{{ old('ttl_ayah') }}">
                        @error('ttl_ayah')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                        <div class="form-group">
                             <label for="agama_ayh">Agama Ayah</label>
                            <input
                            class="form-control @error('agama_ayah') is-invalid @enderror"
                            type="text" name="agama_ayah" id="agama_ayah" value="{{ old('agama_ayah') }}">
                            @error('agama_ayah')
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
                            class="form-control @error('usia_ayah') is-invalid @enderror"
                            type="text" name="usia_ayah" id="usia_ayah" value="{{ old('usia_ayah') }}">
                            @error('usia_ayah')
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
                            class="form-control @error('no_telp_ayah') is-invalid @enderror"
                            type="text" name="no_telp_ayah" id="no_telp_ayah" value="{{ old('no_telp_ayah') }}">
                            @error('no_telp_ayah')
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
                             <label for="penghasilan_ayah">Penghasilan/Bulan Ayah</label>
                            <input
                            class="form-control @error('penghasilan_ayah') is-invalid @enderror"
                            type="text" name="penghasilan_ayah" id="penghasilan_ayah" value="{{ old('penghasilan_ayah') }}">
                            @error('peng_ayh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="peng_ibu">Penghasilan/Bulan Ibu</label>
                           <input
                           class="form-control @error('penghasilan_ibu') is-invalid @enderror"
                           type="text" name="penghasilan_ibu" id="penghasilan_ibu" value="{{ old('penghasilan_ibu') }}">
                           @error('penghasilan_ibu')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>
                       
                        <h3>Script Upload File</h3>
                            <form action="upload" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="gambar">
                                <br>
                                <br>
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