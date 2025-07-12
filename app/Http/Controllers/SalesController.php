<?php

namespace App\Http\Controllers;

class SalesController extends Controller
{
    public function nasional()
    {
        return inertia('Sales/Nasional');
    }

    public function CM01()
    {
        return inertia('Sales/CM01');
    }

    public function CM02()
    {
        return inertia('Sales/CM02');
    }
}
