<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
      <h1>Halaman Admin</h1>
    </div>

    <div class="row">
      <div class="container">
        <div id="add-column" class="row col-md-8 offset-sm-2">
            <form action="{{ Route('addrow') }}" method="POST">
              @method('post')
            @csrf
            <label for="row">Jumlah Kolom Soal</label><br>
            <input type="text" name='row'>
            <input id="button-ok" class="btn btn-primary" type="submit" value="OK">
            </form>
        </div>


            <div class="background">
                <div class="warp" style="margin-left:255px;">
                    <form class="form-main" action="{{ Route('admin_kirim') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="soal">Soal</label><br>
                            <label for="upload">Tambahkan Foto : </label> <input type="file" name="upload" value=""><br>
                            <textarea name="soal" rows="8" cols="80" class="input-holder"></textarea><br>
                        </div>
                        <div class="form-group">
                            <label for="opsi1">Opsi 1</label><br>
                            <textarea name="opsi1" rows="3" cols="40" class="input-holder"></textarea><br>
                        </div>
                        @php if(isset($row)){
                            for($i = 0;$i < $row;$i++){ @endphp 
                        <div class="form-group">
                            <label for="opsi2">Opsi 2</label><br>
                            <textarea name="opsi2" rows="3" cols="40" class="input-holder"></textarea><br>
                        </div>
                        @php }

                    }else{ @endphp
                </div>
            </div>
        @php

        }
        @endphp
        <div class="form-group">
            <input id="btn-simpan" class="btn btn-primary" type="submit" name="simpan" value="Simpan">
        </div>
      </form>
        <a href="{{ Route('preview_soal') }}" class="btn btn-primary" style="margin-left:250px; margin-top:10px; ">Preview Soal</a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
