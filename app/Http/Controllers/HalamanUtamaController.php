<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class HalamanUtamaController extends Controller
{
    public function index()
    {
        $data = [
            'JudulHalaman' => 'Halaman Utama',
            'Mhs' => DB::table('Mhs')->get()
        ];
        return Inertia::render('Welcome', ['data' => $data]);
    }
}
