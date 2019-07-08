<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    
    <p>Ini adalah Halaman Kontak</p>

    <table border="1">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>rakhakok@gmail.com</td>
        </tr>
        <tr>
            <td>HP</td>
            <td>:</td>
            <td>0856-5544-8787</td>
        </tr>
    </table>

@endsection