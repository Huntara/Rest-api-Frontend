<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Datasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        <a href="/datasiswa/create" class="btn btn-success">+ Tambah Data</a>
        <table class="table table-bordered table-success my-3">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th>Nik</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $value)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$value['nama']}}</td>
                        <td>{{$value['nik']}}</td>
                        <td>{{$value['jk']}}</td>
                        <td>{{$value['tgl_lahir']}}</td>
                        <td><img src="{{ asset($value['image_path'])}}" alt="" width="150"></td>

                        <td>
                            <a href="/datasiswa/{{ $value['id'] }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            <a href="/datasiswa/edit/{{ $value['id']}}" class="btn btn-warning"><i class="bi bi-tools"></i></a>
                            <form action="/datasiswa/delete/{{$value['id']}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-1"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>