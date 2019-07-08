<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $nama = "Rakha Sehat";
        $matkul = ["Pemrograman Dasar", "Desain Grafis"];
        return view('biodata' ,['nama' => $nama, 'matkul' => $matkul]);
    }
}
