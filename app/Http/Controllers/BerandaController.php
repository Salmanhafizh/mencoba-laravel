<?php

namespace App\Http\Controllers;


class BerandaController extends Controller
{
    public function index()
    {
        $kantin = [
            'nama' => 'Kantin FIT',
            'lokasi' => 'Gedung Selaru, lantai 1',
            'jam' => '07.00 - 17.00 WIB',
        ];

        return view('beranda', ['kantin' => $kantin]);
    }
}
