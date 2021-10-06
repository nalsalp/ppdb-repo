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
    <a href="{{ route('exportuser') }}" class="btn"><button>export</button></a><br>
    @php
        $i=1
    @endphp
    @foreach ($user as $tampil)
    {{ $i++ }}
    <p>Nama = {{ $tampil->name }}</p>
    <p>Email = {{ $tampil->email }}</p>
    <p>Telp = {{ $tampil->no_telp }}</p>
    <img src="{{ asset('public/img/buktitransfer/'.$tampil->fto_bukti)}}" alt="Bukti Transfer {{ $tampil->name }}" class="img-responsive img-circle user-photo">
    <p>Waktu Daftar = {{ $tampil->created_at}}</p><br><br>
    
    @endforeach
</body>
</html>