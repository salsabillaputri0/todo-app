<?php

namespace App\Http\Controllers;
// untuk memanggil class yang diperlukan 
use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        // untuk mengambil data variable yang ada di dalam folder models/task
        $data = [
            'title' => 'Home',
            // membuat judul untuk tampilan Home
            'lists' => TaskList::all(),
            // lists untuk mengambil semua TaskList yang ada di folder models/TaskList
            'tasks' => Task::orderBy('created_at', 'desc')->get(),
             // orderBy desc mengurutkan dari yang terbesar ke yang terkecil
            'priorities' => Task::PRIORITIES
            // untuk mengambil nilai priorities dari const yang ada di app/models/task
        ];
    
        // mengarahkan ke folder view
        return view('pages.home', $data);
    }

    // function store untuk menyimpan data ke database (required adalah data yang dibutuhkan)
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'list_id' => 'required',
            'deskripsi' => 'max:255',
            'priority' => 'required|in:low,medium,high',
        ]);
        // digunakan untuk menyimpan data baru ke dalam basis data
        // description digunakan untuk
        // priority digunakan untuk menambahkan data 

        // task create berfungsi untuk memasukan data ke database/table
        Task::create([
            'name' => $request->name,
            'list_id' => $request->list_id,
            'deskripsi' => $request->deskripsi,
            'priority' => $request->priority
        ]);
        
        // mengembalikan kehalaman sebelumnya
        return redirect()->back();
    }
    

    // merubah/mengupdata status dari belum selesam menjadi selesai
    public function complete($id) {
        Task::findOrFail($id)->update([
            'is_completed' => true
        ]);

        return redirect()->back();
    }

    // destroy berfungsi untuk menghapus data yang ada di database/kolom
    public function destroy($id) {
        Task::findOrFail($id)->delete();

        return redirect()->back();
    }

    public function show($id) {
        $task = Task::findOrfail($id);

        $data = [
            'title' => 'Details',
            'task' => $task,
        ];
        // memanggil tampilan 
        return view('pages.details', $data);
    }
}
// kode ini adalah struktur dasar untuk menampilkan halaman dalam laravel