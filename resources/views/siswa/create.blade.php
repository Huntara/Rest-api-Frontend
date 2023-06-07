<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create API DataSiswa</title>
</head>
<body>
    <form action="/datasiswa/store" method="post">
        @csrf
        <input type="text" name="nama" id="" placeholder="Nama">
        <input type="number" name="nik" id="" placeholder="Nik">
        <input type="text" name="jk" id="" placeholder="Jenis Kelamin">
        <input type="date" name="tgl_lahir" id="" placeholder="Tanggal Lahir">
        <input type="file" name="image" id="" placeholder="Image">

        <button type="submit">Submit</button>
    </form>
</body>
</html>