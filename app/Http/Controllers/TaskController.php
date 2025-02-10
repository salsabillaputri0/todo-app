<?php

namespace App\Http\Controllers;
// untuk memanggil class yang diperlukan
use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // function index untuk mengerahkah file utama
    public function index() {
        $data = [
            'title' => 'Home',
            'test' => 'List',
            'lists' => TaskList::all(),
            'tasks' => Task::orderBy('created_at', 'desc')->get(),
            'priorities' => Task::PRIORITIES
        ];
// mengarahkah ke folder view
        return view('pages.home', $data);
    }
// function store untuk menyimpan data le database (required adalah data yang dibutuhkan)
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'list_id' => 'required'
        ]);
// task create berfungsi untuk memasukan data ke database/table
        Task::create([
            'name' => $request->name,
            'list_id' => $request->list_id
        ]);
    // mengembalikan ke halaman sebelumnya
        return redirect()->back();
    }
// merubah atau mengupdate status dari belum selesai menjadi selesai
    public function complete($id) {
        Task::findOrFail($id)->update([
            'is_completed' => true
        ]);

        return redirect()->back();
    }
//  destroy berfungsi untuk manghapus data yang ada di database/kolom
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