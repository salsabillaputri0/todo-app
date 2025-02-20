<?php

namespace App\Models; // Menyatakan bahwa model ini berada di dalam namespace App\Models

use Illuminate\Database\Eloquent\Model; // Mengimpor kelas Model dari Laravel untuk membuat model Eloquent

class TaskList extends Model // Mendefinisikan model TaskList yang mewarisi dari kelas Model
{
    // Kolom ini untuk menemukan kolom apa saja yang bisa diisi menggunakan mass assignment
    protected $fillable = ['name']; // Hanya kolom 'name' yang bisa diisi secara mass-assignment

    // Kolom ini tidak bisa diisi secara mass-assignment, hanya bisa diatur oleh sistem
    protected $guarded = [
        'id', // ID tidak bisa diisi
        'created_at', // Timestamp created_at tidak bisa diisi
        'updated_at' // Timestamp updated_at tidak bisa diisi
    ];

    // Mendefinisikan relasi one-to-many antara TaskList dan Task
    public function tasks() {
        // Mengembalikan relasi hasMany, dimana satu TaskList bisa memiliki banyak Task
        return $this->hasMany(Task::class, 'list_id'); 
    }
}
