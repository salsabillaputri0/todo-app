<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function show()
    {
        $biodata = [
            'nama' => 'John Doe',
            'alamat' => 'Jl. Contoh No. 123, Jakarta',
            'email' => 'john.doe@example.com',
            'telepon' => '081234567890',
            'tanggal_lahir' => '1990-01-01',
        ];

        return view('biodata', compact('biodata'));
    }
}
