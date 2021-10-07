<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Register</title>
</head> 
<body>
   
    <h1>Data Register</h1>
    <a href="{{ route('export') }}" >Export</a><br>
    @php
        $i=1;
    @endphp
    @foreach ($user as $tampil)
    <b>{{ $i++ }}</b>
    <p>Nama = {{ $tampil->name }}</p>
    <p>Email = {{ $tampil->email }}</p>
    <p>Telp = {{ $tampil->no_telp }}</p>
    <img src="{{ asset('public/img/buktitransfer/'.$tampil->fto_bukti)}}" alt="Bukti Transfer {{ $tampil->name }}" class="img-responsive img-circle user-photo">
    <p>Waktu Daftar = {{ $tampil->created_at}}</p>
    <a href="#">Benar</a>
    <form method="POST" action="{{ url('user/salah', $tampil->id ) }}" onsubmit="return confirm('yakin hapus data?')">
        @method('delete')
        @csrf
        <button class="btn btn-danger btn-sm">salah</button><br><br>
            
  
    @endforeach
</body>
</html>