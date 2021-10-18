@extends('layouts.admin')
@section('main-content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Akademik</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div id="card1" class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Tambah Soal</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ Route('foo') }}" class="btn btn-primary">
              <i class="fa fa-plus" aria-hidden="true"></i>  Tambah Soal
            </a>
          </div>
        </div>

        <div id="card2" class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Daftar Soal</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

        <div id="card3" class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Skor Siswa</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>

@endsection
