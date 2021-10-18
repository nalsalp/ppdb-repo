@extends('layouts.admin')
@section('main-content')

<head>
  <link rel="stylesheet" href="/css/style.css">
  <title>Halaman CRUD Soal</title>
</head>
<div class="row">
  <h1 class="title-admin">Halaman Input Soal Akademik</h1>
</div>

<div class="row">
  <div class="container">
    <div class="background form-lol">
        <div class="warp">
            <form class="form-main" action="{{ Route('admin_kirim') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="judul">Judul Tes</label><br>
                  <input class="judul-tes" type="text" name="judul" value="">
                </div>
                <div class="form-group">
                    <label for="no_soal">Nomor Soal</label><br>
                    <input class="nomor-soal" type="text" name="id" value="">
                </div>
                <div class="form-group">
                    <label for="soal">Soal</label><br>
                    <label for="images">Tambahkan Gambar : </label>
                    <input type="file" name="image"><br>
                    <textarea name="soal" rows="8" cols="80" class="input-holder"></textarea><br>
                </div>
                <div class="form-group">
                    <label for="opsi1">Opsi 1</label><br>
                    <textarea name="opsi1" rows="3" cols="40" class="input-holder"></textarea><br>
                </div>
                <div class="form-group">
                    <label for="opsi2">Opsi 2</label><br>
                    <textarea name="opsi2" rows="3" cols="40" class="input-holder"></textarea><br>
                </div>
                <div class="form-group">
                    <label for="opsi3">Opsi 3</label><br>
                    <textarea name="opsi3" rows="3" cols="40" class="input-holder"></textarea><br>
                </div>
                <div class="form-group">
                    <label for="opsi4">Opsi 4</label><br>
                    <textarea name="opsi4" rows="3" cols="40" class="input-holder"></textarea><br><br>
                </div>
                <div class="form-group">
                    <input id="btn-simpan" class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                </div>
            </form>
        </div>
    </div>
    <a href="{{ Route('preview_soal') }}" class="btn btn-primary btnn-lol">Daftar Soal</a>
  </div>
</div>

@endsection
