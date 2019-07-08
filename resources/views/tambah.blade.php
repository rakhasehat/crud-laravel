<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2><a href="#">Rakhaaa</a></h2>
    <h3>Data Pegawai</h3>
    
    <a href="/pegawai">Kembali</a>
    <br>
    <br>

    <form action="/pegawai/store" method="POST">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required>
        Jabatan <input type="text" name="jabatan" required>
        Umur <input type="text" name="umur" required>
        Alamat <input type="text" name="alamat" required>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>