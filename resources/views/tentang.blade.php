<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')
    

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <p>Ini adalah Halaman Tentang</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime itaque sapiente repellendus dolores non numquam voluptates quia vero eos perspiciatis. Culpa voluptatem vel aspernatur nulla cum fugiat quaerat exercitationem iure?</p>

@endsection