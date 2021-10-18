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
        <div class="background" style="margin-left:250px;">
            <div class="warp">
                <form class="form-main" action="{{ url('edit/edit', $soal->id) }}" method="post">
                    @method('patch')
                    @csrf
                    <input type="hidden" name="id" value="{{ $soal -> id }}">
                    <div class="form-group">
                      <label for="no_soal">Nomor Soal</label><br>
                      <input type="text" name="id" value="{{ $soal -> id }}">
                    </div>
                    <div class="form-group">
                        <label for="soal">Soal</label><br>
                        <label for="upload">Tambahkan Foto : </label> <input type="file" name="upload" value=""><br>
                        <textarea name="soal" rows="8" cols="80" class="input-holder">{{ $soal -> soal }}</textarea><br>
                    </div>
                    <div class="form-group">
                        <label for="opsi1">Opsi 1</label><br>
                        <textarea name="opsi1" rows="3" cols="40" class="input-holder">{{ $soal -> opsi1 }}</textarea><br>
                    </div>
                    <div class="form-group">
                        <label for="opsi2">Opsi 2</label><br>
                        <textarea name="opsi2" rows="3" cols="40" class="input-holder">{{ $soal -> opsi2 }}</textarea><br>
                    </div>
                    <div class="form-group">
                        <label for="opsi3">Opsi 3</label><br>
                        <textarea name="opsi3" rows="3" cols="40" class="input-holder">{{ $soal -> opsi3 }}</textarea><br>
                    </div>
                    <div class="form-group">
                        <label for="opsi4">Opsi 4</label><br>
                        <textarea name="opsi4" rows="3" cols="40" class="input-holder">{{ $soal -> opsi4 }}</textarea><br><br>
                    </div>
                    <div class="form-group">
                        <input id="btn-simpan" class="btn btn-primary" type="submit" name="simpan" value="Update">
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
