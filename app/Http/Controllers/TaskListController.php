<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
    // Method untuk menyimpan data TaskList baru ke dalam database
    public function store(Request $request) {
        // Validasi input dari pengguna untuk memastikan nama task list harus diisi dan maksimal 100 karakter
        $request->validate([
            'name' => 'required|max:100'
        ]);

        // Menyimpan data TaskList baru ke dalam database
        TaskList::create([
            'name' => $request->name // Nama task list diambil dari input form
        ]);

        // Setelah data disimpan, kembali ke halaman sebelumnya
        return redirect()->back();
    }

    // Method untuk menghapus TaskList berdasarkan ID
    public function destroy($id) {
        // Mencari TaskList berdasarkan ID dan menghapusnya
        TaskList::findOrFail($id)->delete();

        // Setelah task list dihapus, kembali ke halaman sebelumnya
        return redirect()->back();
    }
}
