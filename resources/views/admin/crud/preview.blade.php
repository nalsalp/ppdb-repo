@extends('layouts.admin')
@section('main-content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Preview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        @if(session()->get('success'))
            <div class="alert">
                <script>
                    swal({
                        title:"",
                        text:"{{ session()->get('success') }}",
                        icon:"success",
                        });
                </script>
            </div>
        @endif
    <div class="row">
      <h1>Jumlah Soal Dalam Database : {{ $dataz }}</h1>
      <div class="container">
        <a href="{{ Route('foo') }}" class="btn btn-primary">Kembali</a>
        <a href="{{ Route('hapus_semua') }}" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Semua Soal?')">Hapus Semua Soal</a>
        <a href="{{ Route('foo') }}" class="btn btn-primary">Tambah Soal</a>
      </div>
    </div>
    <div class="row">
            <div class="col-md-12">
              <br>
                <table class="table table-dark table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style=" text-align:center;">Nomor Soal</th>
                            <th style="text-align:center;">Judul Tes</th>
                            <th style=" text-align:center;">Soal</th>
                            <th style=" text-align:center;">Opsi 1</th>
                            <th style=" text-align:center;">Opsi 2</th>
                            <th style=" text-align:center;">Opsi 3</th>
                            <th style=" text-align:center;">Opsi 4</th>
                            <th style=" text-align:center;">Pilihan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $datas)
                        <tr>
                            <td style=" text-align:center;">{{$datas-> id}}</td>
                            <td>{{ $datas-> judul_tes }}</td>
                            <td>{{$datas-> soal}}</td>
                            <td style=" text-align:center;">{{$datas-> opsi1}}</td>
                            <td style=" text-align:center;">{{$datas-> opsi2}}</td>
                            <td style=" text-align:center;">{{$datas-> opsi3}}</td>
                            <td style=" text-align:center;">{{$datas-> opsi4}}</td>
                            <td style="display:flex;">
                              <a style="margin-right:5px;" href="{{ route('soal.delete',$datas->id) }}" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                              <a href="{{ route('edit', $datas -> id) }}" class="btn btn-warning">Edit</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>

@endsection
