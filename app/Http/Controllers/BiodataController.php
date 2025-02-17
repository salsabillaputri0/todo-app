<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function show()
    {
        $biodata = [
            'nama' => 'Salsabilla Putri Ranesti',
            'alamat' => 'Kalijati Barat',
            'email' => 'spranesti07@gmail.com',
            'telepon' => '081212946069',
            'tanggal_lahir' => '2007-01-09',
        ];

        return view('biodata', compact('biodata'));
    }
}
