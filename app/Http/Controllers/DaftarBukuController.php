<?php

namespace App\Http\Controllers;

class DaftarBukuController extends Controller
{
    public function DaftarBuku()
    {
        return view('pages.daftarBuku', [
            'title' => 'daftar buku',
        ]);
    }
}