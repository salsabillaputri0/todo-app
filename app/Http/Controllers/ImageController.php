<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    // Menampilkan form upload
    public function showForm()
    {
        return view('upload');
    }

    

// public function uploadImage(Request $request)
// {
//     // Validasi gambar yang diupload
//     $request->validate([
//         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//     ]);

//     // Mengambil file yang diupload
//     $image = $request->file('image');

//     // Menyimpan gambar ke storage/public
//     $path = $image->store('images', 'public');

//     // Menyimpan path gambar ke database
//     Image::create(['path' => $path]);

//     // Mengembalikan response
//     return back()->with('success', 'Gambar berhasil diupload!')->with('path', $path);
// }

public function showImages()
{
    $images = Image::all(); // Mengambil semua gambar dari database
    return view('images.index', compact('images')); // Menampilkan ke view
}

public function deleteImage(Image $image)
{
    // Hapus file gambar dari storage
    Storage::delete('public/' . $image->path);

    // Hapus record gambar dari database
    $image->delete();

    return back()->with('success', 'Gambar berhasil dihapus!');
}

}
