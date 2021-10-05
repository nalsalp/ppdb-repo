<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>F O R M U L I R</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<<<<<<< HEAD
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
=======
<body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                     
                            <center>
                            <h1>Form Pendaftaran Calon Siswa Peserta Didik Baru</h1>
                            <h3>SMK BAGIMU NEGERIKU SEMARANG</h3>
                            <h4>Tahun Ajaran 2022/2023</h4>
                            </center>

                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
>>>>>>> 083402fd6c8ec1f3412e1b198bed17e9f4b369ec
                            </div>
                            @endif

<<<<<<< HEAD
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
=======
                            <br/>
                             <!-- form validasi -->
                            <form action="/proses" method="post">
                                {{ csrf_field() }}
>>>>>>> 083402fd6c8ec1f3412e1b198bed17e9f4b369ec

                                <div class="form-group">
                                    <label for="nama_leng">Nama Lengkap</label>
                                    <input class="form-control" type="text" name=" nama_leng" value="{{ old('nama_leng ') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pang">Nama Panggilan</label>
                                    <input class="form-control" type="text" name="nama_pang" value="{{ old('Nama Panggilan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select class="form-control @error('jk') is-invalid @enderror" name="jk" id="jk">
                                        <option value="{{ old('jk') }}">{{ old('jk') }}</option>
                                            <option value="P">Perempuan</option>
                                            <option value="L">Laki-laki</option>
                                            
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input class="form-control" type="text" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_ktp">Alamat KTP</label>
                                    <input class="form-control" type="text" name="alamat_ktp" value="{{ old('alamat_ktp') }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_tinggal">Alamat Tinggal</label>
                                    <input class="form-control" type="text" name="alamat_tinggal" value="{{ old('alamat_tinggal') }}">
                                </div>
                                <div class="form-group">
                                    <label for="asal_sklh">Asal Sekolah</label>
                                    <input class="form-control" type="text" name="asal_sklh" value="{{ old('asal_sklh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="j_1">Jurusan 1</label>
                                
                                    <select class="form-control @error('j_1') is-invalid @enderror" name="j_1" id="j_1">
                                        <option value="{{ old('j_1') }}">{{ old('j_1') }}</option>
                                            <option value="TB">Tata Boga</option>
                                            <option value="MM">MultiMedia</option>
                                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                                            <option value="BKP">Bisnis Kontruksi dan Properti</option>
                                            <option value="TKTO">Teknik Kendaraan Ringan Otomotif</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="j_2">Jurusan 2</label>
                                    <select class="form-control @error('j_2') is-invalid @enderror" name="j_2" id="j_2">
                                        <option value="{{ old('j_2') }}">{{ old('j_2') }}</option>
                                            <option value="TB">Tata Boga</option>
                                            <option value="MM">MultiMedia</option>
                                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                                            <option value="BKP">Bisnis Kontruksi dan Properti</option>
                                            <option value="TKTO">Teknik Kendaraan Ringan Otomotif</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <input class="form-control" type="text" name="kewarganegaraan" value="{{ old('kewarganegaraan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select class="form-control @error('agama') is-invalid @enderror" name="agama" id="agama">
                                        <option value="{{ old('agama') }}">{{ old('agama') }}</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>  
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="tinggi_badan">Tinggi Badan</label>
                                    <input class="form-control" type="text" name="tinggi_badan" value="{{ old('tinggi_badan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="berat_badan">Berat Badan</label>
                                    <input class="form-control" type="text" name="berat_badan" value="{{ old('berat_badan') }}">
                                </div>
                                <div class="form-group">
                                    <label for="umur">Umur</label>
                                    <input class="form-control" type="text" name="umur" value="{{ old('umur') }}">
                                </div>
                                <div class="form-group">
                                    <label for="riwayat_peny">Riwayat Penyakit</label>
                                    <input class="form-control" type="text" name="riwayat_peny" value="{{ old('riwayat_peny') }}">
                                </div>
                                <div class="form-group">
                                    <label for="cita_cita">Cita-Cita</label>
                                    <input class="form-control" type="text" name="cita_cita" value="{{ old('cita_cita') }}">
                                </div>
                                <div class="form-group">
                                    <label for="hobi">Hobi</label>
                                    <input class="form-control" type="text" name="hobi" value="{{ old('hobi') }}">
                                </div>
                                <div class="form-group">
                                    <label for="no_telp">Nomor Telepon</label>
                                    <input class="form-control" type="text" name="no_telp" value="{{ old('no_telp') }}">
                                </div>
                                <div class="form-group">
                                    <label for="anak_ke">Anak ke-</label>
                                    <input class="form-control" type="text" name="anak_ke" value="{{ old('anak_ke') }}">
                                </div>
                                <div class="form-group">
                                    <label for="status_anak">Status </label>
                                    <input class="form-control" type="text" name="status_anak" value="{{ old('status_anak') }}">
                                </div>
                                <div class="form-group">
                                    <label for="gol_darah">Golongan Darah</label>
                                    <input class="form-control" type="text" name="gol_darah" value="{{ old('gol_darah') }}">
                                </div>
                                <div class="form-group">
                                    <label for="suku">Suku</label>
                                    <input class="form-control" type="text" name="suku" value="{{ old('suku') }}">
                                </div>
                                <div class="form-group">
                                    <label for="prestasi">Prestasi Di Sekolah</label>
                                    <input class="form-control" type="text" name="prestasi" value="{{ old('prestasi') }}">
                                </div>
                                <div class="form-group">
                                    <label for="bakat">Bakat</label>
                                    <input class="form-control" type="text" name="bakat" value="{{ old('bakat') }}">
                                </div>
                                <div class="form-group">
                                    <label for="pel_disukai">Pelajaran Yang Disukai</label>
                                    <input class="form-control" type="text" name="pel_disukai" value="{{ old('pel_disukai') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input class="form-control" type="text" name="nik" value="{{ old('nik') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input class="form-control" type="text" name="nisn" value="{{ old('nisn') }}">
                                </div>
                                <div class="form-group">
                                    <label for="ijazah">Ijazah</label>
                                    <input class="form-control" type="text" name="ijazah" value="{{ old('ijazah') }}">
                                </div>
                                <div class="form-group">
                                    <label for="akta">Akta Kelahiran</label>
                                    <input class="form-control" type="text" name="akta" value="{{ old('akta') }}">
                                </div>
                                <div class="form-group">
                                    <label for="foto_diri">Foto Diri</label>
                                    <input class="form-control" type="text" name="foto_diri" value="{{ old('foto_diri') }}">
                                </div>
                                <div class="form-group">
                                    <label for="foto_rumah">Foto Rumah</label>
                                    <input class="form-control" type="text" name="foto_rumah" value="{{ old('foto_rumah') }}">
                                </div>
                                <div class="form-group">
                                    <label for="foto_keluarga">Foto Keluarga</label>
                                    <input class="form-control" type="text" name="foto_keluarga" value="{{ old('foto_keluarga') }}">
                                </div>
                                <div class="form-group">
                                    <label for="kis">Kartu Indonesia Sehat</label>
                                    <input class="form-control" type="text" name="kis" value="{{ old('kis') }}">
                                </div>
                                <div class="form-group">
                                    <label for="kip">Kartu Indonesia Pintar</label>
                                    <input class="form-control" type="text" name="kip" value="{{ old('kip') }}">
                                </div>
                                <div class="form-group">
                                    <label for="sks">Surat Keterangan Sehat</label>
                                    <input class="form-control" type="text" name="sks" value="{{ old('sks') }}">
                                </div>
                                <div class="form-group">
                                    <label for="skb">Surat Keterangan baik</label>
                                    <input class="form-control" type="text" name="skb" value="{{ old('skb') }}">
                                </div>
                                <div class="form-group">
                                    <label for="spp_sek">SPP Sekolah</label>
                                    <input class="form-control" type="text" name="spp_sek" value="{{ old('spp_sek') }}">
                                </div>
                                <div class="form-group">
                                    <label for="sktm">Surat Keterangan Tidak Mampu</label>
                                    <input class="form-control" type="text" name="sktm" value="{{ old('sktm') }}">
                                </div>
                                <div class="form-group">
                                    <label for="biaya_saudara">Biaya Saudara</label>
                                    <input class="form-control" type="text" name="biaya_saudara" value="{{ old('biaya_saudara') }}">
                                </div>  



                                <div class="form-group">
                                    <label for="nama_ayh">Nama Ayah</label>
                                    <input class="form-control" type="text" name="nama_ayh" value="{{ old('nama_ayh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama_ibu">Nama Ibu</label>
                                    <input class="form-control" type="text" name="nama_ibu" value="{{ old('nama_ibu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="pek_ayh">Pekerjaan Ayah</label>
                                    <input class="form-control" type="text" name="pek_ayh" value="{{ old('pek_ayh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="pek_ibu">Pekerjaan Ibu</label>
                                    <input class="form-control" type="text" name="pek_ibu" value="{{ old('pek_ibu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="asal_ayh">Asal Ayah</label>
                                    <input class="form-control" type="text" name="asal_ayh" value="{{ old('usasal_ayhia') }}">
                                </div>
                                <div class="form-group">
                                    <label for="asal_ibu">Asal Ibu</label>
                                    <input class="form-control" type="text" name="asal_ibu" value="{{ old('asal_ibu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="pend_ayh">Pendidikan Ayah</label>
                                    <input class="form-control" type="text" name="pend_ayh" value="{{ old('pend_ayh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="pend_ibu">Pendidikan Ibu</label>
                                    <input class="form-control" type="text" name="pend_ibu" value="{{ old('pend_ibu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir_ayh">Tempat Lahir Ayah</label>
                                    <input class="form-control" type="text" name="tempat_lahir_ayh" value="{{ old('tempat_lahir_ayh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                                    <input class="form-control" type="text" name="tempat_lahir_ibu" value="{{ old('tempat_lahir_ibu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir_ayh">Tanggal Lahir Ayah</label>
                                    <input class="form-control" type="text" name="tgl_lahir_ayh" value="{{ old('tgl_lahir_ayh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir_ibu">Tanggal Lahir Ibu</label>
                                    <input class="form-control" type="text" name="tgl_lahir_ibu" value="{{ old('tgl_lahir_ibu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="agama_ayh">Agama Ayah</label>
                                    <input class="form-control" type="text" name="agama_ayh" value="{{ old('agama_ayh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="agama_ibu">Agama Ibu</label>
                                    <input class="form-control" type="text" name="agama_ibu" value="{{ old('agama_ibu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="usia_ayh">Usia Ayah</label>
                                    <input class="form-control" type="text" name="usia_ayh" value="{{ old('usia_ayh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="usia_ibu">Usia Ibu</label>
                                    <input class="form-control" type="text" name="usia_ibu" value="{{ old('usia_ibu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="no_telp_ayh">Nomor Telpon Ayah</label>
                                    <input class="form-control" type="text" name="no_telp_ayh" value="{{ old('no_telp_ayh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="no_telp_ibu">Nomor Telpon Ibu</label>
                                    <input class="form-control" type="text" name="no_telp_ibu" value="{{ old('no_telp_ibu') }}">
                                </div>
                                <div class="form-group">
                                    <label for="peng_ayh">Penghasilan/Bulan Ayah</label>
                                    <input class="form-control" type="text" name="peng_ayh" value="{{ old('peng_ayh') }}">
                                </div>
                                <div class="form-group">
                                    <label for="peng_ibu">Penghasilan/Bulan Ibu</label>
                                    <input class="form-control" type="text" name="peng_ibu" value="{{ old('peng_ibu') }}">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-dark" type="submit" value="KIRIM   ">
                                </div>
                            </form>

                        </div>
<<<<<<< HEAD
=======

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
<<<<<<< HEAD
                                <input type="file" name="gambar">
                                <br>
                                <br>
=======
                                <div class="mb-3">
                                     <label for="gambar" class="form-label">Upload gambar</label>
                                    <input class="form-control" type="file" id="gambar" multiple>
                                </div>
                                <Br>

>>>>>>> 083402fd6c8ec1f3412e1b198bed17e9f4b369ec
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </form>
>>>>>>> dd4ab1b02cacb67a03364c0ebd08837449e382e3
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>