<?php

namespace App\Http\Controllers;

class DaftarPeminjamanBukuController extends Controller
{
    public function DaftarPeminjamanBuku()
    {
        $dataPeminjam = [
            [
                'tbodyNo' => 1,
                'tbodyNama' => 'arga hidarta',
                'tbodyNIK' => 11221212213332,
                'tbodyEmail' => 'hidarta@gmail.com',
                'tbodyAlamat' => 'jogja , indonesia',
                'tbodyHp' => '082121122123',
            ],

            [
                'tbodyNo' => 2,
                'tbodyNama' => 'hanif',
                'tbodyNIK' => 11221212213332,
                'tbodyEmail' => 'hanif@gmail.com',
                'tbodyAlamat' => 'bekasi , indonesia',
                'tbodyHp' => '087621332321',
            ],

            [
                'tbodyNo' => 3,
                'tbodyNama' => 'syarifuddin',
                'tbodyNIK' => 33110104120004,
                'tbodyEmail' => 'udin@gmail.com',
                'tbodyAlamat' => 'imogiri , indonesia',
                'tbodyHp' => '087621332321',
            ],
        ];
        return view('pages.daftarPeminjamanBuku', [
            'title' => 'daftar Peminjaman buku',
            'tablePeminjam' => $dataPeminjam,
        ]);
    }
}