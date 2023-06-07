<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center container">
        <form class="mt-5">
            <fieldset disabled>
              <legend class="text-center">Data Nama Siswa "{{$siswa['nama']}}"</legend>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Photo Picture</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$siswa['image']}}">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nama</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$siswa['nama']}}">
              </div>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nik</label>
                <input type="number" id="disabledTextInput" class="form-control" placeholder="{{$siswa['nik']}}">
              </div><div class="mb-3">
                <label for="disabledTextInput" class="form-label">Jenis Kelamin</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$siswa['jk']}}">
              </div><div class="mb-3">
                <label for="disabledTextInput" class="form-label">Tanggal Lahir</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$siswa['tgl_lahir']}}">
              </div>
            </fieldset>
            <a href="/datasiswa" class="btn btn-primary">Back</a>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>