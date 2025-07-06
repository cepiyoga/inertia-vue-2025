<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HalamanUtamaController extends Controller
{
    public function index()
    {
        $data = [
            'JudulHalaman' => 'Halaman Utama',
            'Mhs' => [
                ['Nama' => 'Cepii Yoga', 'NIM' => '10'],
                ['Nama' => 'Ratih', 'NIM' => '11'],
                ['Nama' => 'Naufal', 'NIM' => '12'],
            ]
        ];
        return Inertia::render('Welcome', ['data' => $data]);
    }
}
