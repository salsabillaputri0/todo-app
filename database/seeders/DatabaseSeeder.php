<?php

namespace Database\Seeders;

// Mengimpor model User (meskipun dalam kode ini tidak digunakan)
use App\Models\User;
// Mengimpor class Seeder dari Laravel, yang digunakan untuk melakukan seeding database
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Fungsi run() ini adalah tempat untuk menjalankan seeder lainnya
     * yang akan mengisi tabel-tabel di database dengan data awal.
     */
    public function run(): void
    {
        // panggilan buat taskseeder/tasklistseeder

 // Memanggil seeder TaskListSeeder untuk memasukkan data awal ke tabel task_lists
        $this->call(TaskListSeeder::class);
        // Memanggil seeder TaskSeeder untuk memasukkan data awal ke tabel tasks
        $this->call(TaskSeeder::class);
    } 
}
// namespace Database\Seeders; — Kode ini menunjukkan bahwa kelas DatabaseSeeder berada di dalam folder database/seeders dalam struktur aplikasi Laravel.