<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Sistem Template</title>
</head>
<body>
    <header>
        <h2>Dari Rakha</h2>
        <nav>
            <a href="/blog">HOME</a>
            |
            <a href="/blog/tentang">ABOUT</a>
            |
            <a href="/blog/kontak">CONTACT</a>
        </nav>
    </header>
    <hr>
    <br>
    <br>

    <!-- bagian judul halaman blog -->
    <h3>@yield('judul_halaman')</h3>

    <!-- bagian konten blog -->
    @yield('konten')
    
    <br>
    <br>
    <hr>
    <footer>
        <p>&copy; <a href="#">Rakha Sehat</a></p>
    </footer>
</body>
</html>