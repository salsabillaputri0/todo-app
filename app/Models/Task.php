<?php

namespace App\Models; // Menyatakan bahwa model ini berada di dalam namespace App\Models

use Illuminate\Database\Eloquent\Model; // Mengimpor kelas Model dari Laravel untuk membuat model Eloquent
use App\Models\TaskList; // Mengimpor model TaskList untuk mendefinisikan relasi

class Task extends Model // Mendefinisikan model Task yang mewarisi dari kelas Model
{
    
    // Kolom ini untuk menemukan kolom apa saja yang bisa diisi menggunakan mass assignment
    protected $fillable = [
        'name', // Nama tugas
        'description', // Deskripsi tugas
        'is_completed', // Status tugas apakah sudah selesai atau belum
        'priority', // Prioritas tugas
        'list_id' // ID dari task list yang terkait
    ];

    // Kolom ini tidak bisa diisi secara mass-assignment, hanya bisa diatur oleh sistem
    protected $guarded = [
        'id', // ID tidak bisa diisi
        'created_at', // Timestamp created_at tidak bisa diisi
        'updated_at' // Timestamp updated_at tidak bisa diisi
    ];

    // Menyatakan konstanta PRIORITIES yang berisi pilihan tingkat prioritas
    const PRIORITIES = [
        'low', // Prioritas rendah
        'medium', // Prioritas sedang
        'high' // Prioritas tinggi
    ];

    // Mendefinisikan accessor untuk mendapatkan kelas CSS berdasarkan prioritas tugas
    public function getPriorityClassAttribute() {
        // Menggunakan switch expression untuk mengembalikan kelas CSS sesuai dengan nilai prioritas
        return match($this->attributes['priority']) {
            'low' => 'success', // Untuk prioritas rendah, kelas 'success'
            'medium' => 'warning', // Untuk prioritas sedang, kelas 'warning'
            'high' => 'danger', // Untuk prioritas tinggi, kelas 'danger'
            default => 'secondary' // Untuk nilai lainnya, kelas 'secondary'
        };
    }

    // Mendefinisikan relasi one-to-many antara Task dan TaskList
    public function list() {
        // Mengembalikan relasi belongsTo, dimana setiap Task terkait dengan satu TaskList
        return $this->belongsTo(TaskList::class, 'list_id');
    }
}
