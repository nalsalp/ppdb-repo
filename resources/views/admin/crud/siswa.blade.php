<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
      <h1 class="mt-2 ms-1 mb-5" style="text-align:center;">Lembar Kerja Siswa</h1>
    </div>
    <div class="row">
      <div class="container">
        <h3 style="margin-left:210px; margin-bottom:30px;">Jumlah Soal : {{ $dataz }}</h3>
        <form method="post" action="{{ Route('siswa.kirim') }}">
          @csrf
          @php
          $i = 1;
          @endphp
          @foreach($data as $datas)
          <div class="card" style="width: 55rem;margin-left:210px; background-color:#71BBFF;">
            <h3 style="margin-left:15px; margin-top:10px;">Soal Nomor {{ $datas -> id }}</h3>
            <div class="card-body">
              <input type="hidden" name="id" value="{{ $datas -> id }}">
              <h5 class="card-title">{{ $datas -> soal }}</h5>
              <hr style="width:45rem;">
              <input id="opsi1" type="radio" name="opsi1" value="{{ $datas -> opsi1 }}">
              <label for="opsi1">{{ $datas -> opsi1 }}</label>
              <br>
              <input id="opsi2" type="radio" name="opsi2" value="{{ $datas -> opsi2 }}">
              <label for="opsi2">{{ $datas -> opsi2 }}</label>
              <br>
              <input id="opsi3" type="radio" name="opsi3" value="{{ $datas -> opsi3 }}">
              <label for="opsi3">{{ $datas -> opsi3 }}</label>
              <br>
              <input id="opsi4" type="radio" name="opsi4" value="{{ $datas -> opsi4 }}">
              <label for="opsi4">{{ $datas -> opsi4 }}</label>
            </div>
          </div>
          <br>
          @php
          $i++;
          @endphp
          @endforeach
          <div class="form-group">
            <input type="submit" name="kirim" value="Kirim" class="btn btn-primary" style="margin-left:210px;">
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
