<?php

namespace App\Http\Controllers;

class EditAnggotaController extends Controller
{
    public function EditAnggota()
    {
        return view('pages.editAnggota', [
            'title' => 'Edit Anggota',
        ]);
    }
}