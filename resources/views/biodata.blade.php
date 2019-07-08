<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 4</title>
</head>
<body>
    <h1>Belajar mengirim view</h1>
    <br>
    <h2>Nama : {{ $nama }}</h2>
    <p>Mata Pelajaran</p>
    <ul>
        @foreach($matkul as $m)

        <li>{{ $m }}</li>

        @endforeach
    </ul>
</body>
</html>