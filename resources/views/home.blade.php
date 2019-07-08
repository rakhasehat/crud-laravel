<!-- Menghubungkan dengan view template master -->

@extends('master')

<!-- Isi bagian judul halaman -->
<!-- Cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- Cara penulisan isi section yang panjang -->
@section('konten')

    <p>Ini adalah Halaman Home!</p>
    <p>Selamat Datang!</p>
    
@endsection