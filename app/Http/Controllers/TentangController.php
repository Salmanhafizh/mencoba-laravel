<?php

namespace App\Http\Controllers;


class TentangController extends Controller
{
    public function index() 
    {
        return view('tentang', [
            'nama' => 'Salman Hafizh Nashirulhaq',
            'nim' => '607062530013',
            'kelas' => 'D3IF-40-03',
        ]);
    }
}
