<?php

namespace App\Http\Controllers; // Menyatakan bahwa controller ini berada di namespace 'App\Http\Controllers'

use App\Models\Biodata; // Mengimpor model 'Biodata' untuk berinteraksi dengan tabel biodata di database
use Illuminate\Http\Request; // Mengimpor kelas 'Request' untuk menangani inputan HTTP request

class BiodataController extends Controller // Mendefinisikan controller 'BiodataController' yang mewarisi kelas Controller
{
    /**
     * Menampilkan daftar semua biodata
     */
    public function index()
    {
        // Mengambil semua data biodata dari tabel biodatas menggunakan Eloquent ORM
        $biodatas = Biodata::all();

        // Mengembalikan tampilan 'biodata.index' dan mengirimkan data biodata ke tampilan
        return view('biodata.index', compact('biodatas'));
    }

    /**
     * Menampilkan form untuk membuat biodata baru
     */
    public function create()
    {
        // Mengembalikan tampilan 'biodata.create' untuk menampilkan form input biodata baru
        return view('biodata.create');
    }

    /**
     * Menyimpan biodata baru ke dalam database
     */
    public function store(Request $request)
    {
        // Validasi inputan dari form untuk memastikan data yang dimasukkan sesuai
        $request->validate([
            'nama' => 'required', // Kolom 'nama' wajib diisi
            'alamat' => 'required', // Kolom 'alamat' wajib diisi
            'email' => 'required|email', // Kolom 'email' wajib diisi dan harus dalam format email yang valid
            'telepon' => 'required', // Kolom 'telepon' wajib diisi
            'deskripsi' => 'required', // Kolom 'deskripsi' wajib diisi
        ]);

        // Membuat biodata baru menggunakan inputan yang valid dan menyimpannya ke database
        Biodata::create($request->all());

        // Setelah berhasil menyimpan, mengarahkan kembali ke halaman daftar biodata dengan pesan sukses
        return redirect()->route('biodata.index')->with('success', 'Biodata berhasil ditambahkan.');
    }
}
