<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2><a href="#">Rakhaaaa</a></h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai">Kembali</a>

    <br>
    <br>
    
    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="POST">
            {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id_pegawai }}">
        Nama <input type="text" name="nama" required value="{{ $p->nama_pegawai }}">
        Jabatan <input type="text" name="jabatan" required value="{{ $p->jabatan_pegawai }}">
        Umur <input type="number" name="umur" required value="{{ $p->umur_pegawai }}">
        Alamat <textarea name="alamat" required>{{ $p->alamat_pegawai }}</textarea>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>