<?php

namespace App\Http\Controllers;

// Mengimpor model yang diperlukan untuk berinteraksi dengan database
use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Method untuk menampilkan halaman utama dengan daftar task dan task list
    public function index() {
        $data = [
            'title' => 'Home', // Judul halaman
            'lists' => TaskList::all(), // Mengambil semua data TaskList dari database
            'tasks' => Task::orderBy('created_at', 'desc')->get(), // Mengambil semua task, diurutkan berdasarkan tanggal dibuat (desc = terbaru dulu)
            'priorities' => Task::PRIORITIES // Mengambil prioritas task yang sudah didefinisikan dalam model Task (misalnya: low, medium, high)
        ];
    
        // Mengirimkan data ke tampilan halaman 'home' untuk ditampilkan
        return view('pages.home', $data);
    }

    // Method untuk menyimpan data task baru ke dalam database
    public function store(Request $request) {
        // Validasi input data dari form
        $request->validate([
            'name' => 'required|max:100', // Nama task harus diisi dan maksimal 100 karakter
            'list_id' => 'required', // ID list task yang harus dipilih
            'deskripsi' => 'max:255', // Deskripsi task opsional dan maksimal 255 karakter
            'priority' => 'required|in:low,medium,high', // Prioritas harus salah satu dari low, medium, atau high
        ]);
        
        // Menyimpan data task baru ke database
        Task::create([
            'name' => $request->name,
            'list_id' => $request->list_id,
            'description' => $request->deskripsi,
            'priority' => $request->priority
        ]);
        
        // Kembali ke halaman sebelumnya setelah task disimpan
        return redirect()->back();
    }

    // Method untuk menandai task sebagai selesai
    public function complete($id) {
        // Mencari task berdasarkan ID dan mengupdate status is_completed menjadi true
        Task::findOrFail($id)->update([
            'is_completed' => true
        ]);

        // Kembali ke halaman sebelumnya
        return redirect()->back();
    } 

    // Method untuk menghapus task dari database
    public function destroy($id) {
        // Mencari task berdasarkan ID dan menghapusnya dari database
        Task::findOrFail($id)->delete();

        // Kembali ke halaman sebelumnya setelah task dihapus
        return redirect()->route('home');
    }

    // Method untuk menampilkan detail task berdasarkan ID
    public function show($id)
    {
        $data = [
            'title' => 'Task',
            'lists' => TaskList::all(),
            'task' => Task::findOrFail($id),
        ];

        // Menampilkan halaman detail task
        return view('pages.details', $data);
    }
    
    public function changeList(Request $request, Task $task)
    {
        $request->validate([
            'list_id' => 'required|exists:task_lists,id',
        ]);

        Task::findOrFail($task->id)->update([
            'list_id' => $request->list_id
        ]);

        return redirect()->back()->with('success', 'List berhasil diperbarui!');
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'list_id' => 'required',
            'name' => 'required|max:100',
            'description' => 'max:255',
            'priority' => 'required|in:low,medium,high'
        ]);

        Task::findOrFail($task->id)->update([
            'list_id' => $request->list_id,
            'name' => $request->name,
            'description' => $request->description,
            'priority' => $request->priority
        ]);

        return redirect()->back()->with('success', 'Task berhasil diperbarui!');
    }
}
