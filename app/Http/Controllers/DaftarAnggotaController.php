<?php

namespace App\Http\Controllers;

class DaftarAnggotaController extends Controller
{
    public function DaftarAnggota()
    {
        $tbody = [
            [

                'tbodyNo' => 1,
                'tbodyNama' => 'fulan bin fulan',
                'tbodyNIK' => 11221212213332,
                'tbodyEmail' => 'fulan@gmail.com',
                'tbodyAlamat' => 'jogja , indonesia',
                'tbodyHp' => '082121122123',
            ],

            [

                'tbodyNo' => 2,
                'tbodyNama' => 'arga',
                'tbodyNIK' => 11221212213332,
                'tbodyEmail' => 'arga@gmail.com',
                'tbodyAlamat' => 'gk , indonesia',
                'tbodyHp' => '087621332321',
            ],
        ];
        return view('pages.daftarAnggota', [
            'title' => 'daftar anggota',
            'tables' => $tbody,
        ]);
    }
}