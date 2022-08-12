<?php

namespace App\Http\Controllers;

class TambahAnggotaController extends Controller
{
    public function TambahAnggota()
    {
        return view('pages.tambahAnggota', [
            'title' => 'Tambah Anggota',
        ]);
    }

}