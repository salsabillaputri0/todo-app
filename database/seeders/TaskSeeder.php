<?php

namespace Database\Seeders; // Menyatakan bahwa ini adalah bagian dari namespace Database\Seeders

use App\Models\Task; // Mengimpor model Task untuk digunakan dalam seeding data
use App\Models\TaskList; // Mengimpor model TaskList untuk mendapatkan ID berdasarkan nama list
use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Menggunakan trait untuk menghindari peristiwa model saat seeding data
use Illuminate\Database\Seeder; // Mengimpor kelas Seeder untuk membuat seeder

class TaskSeeder extends Seeder // Mendefinisikan kelas TaskSeeder yang mewarisi dari Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menyusun array data yang akan disertakan ke dalam tabel tasks
        $tasks = [
            [
                'name' => 'Belajar Laravel', // Nama tugas pertama
                'description' => 'Belajar Laravel di santri koding', // Deskripsi tugas
                'is_completed' => false, // Status tugas, apakah sudah selesai atau belum
                'priority' => 'medium', // Prioritas tugas
                'list_id' => TaskList::where('name', 'Belajar')->first()->id, // Mengambil ID list dengan nama 'Belajar'
            ],
            [
                'name' => 'Belajar React',
                'description' => 'Belajar React di WPU',
                'is_completed' => true,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Belajar')->first()->id,
            ],
            [
                'name' => 'Pantai',
                'description' => 'Liburan ke Pantai bersama keluarga',
                'is_completed' => false,
                'priority' => 'low',
                'list_id' => TaskList::where('name', 'Liburan')->first()->id, // Mengambil ID list dengan nama 'Liburan'
            ],
            [
                'name' => 'Villa',
                'description' => 'Liburan ke Villa bersama teman sekolah',
                'is_completed' => true,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'Liburan')->first()->id,
            ],
            [
                'name' => 'Matematika',
                'description' => 'Tugas Matematika bu Nina',
                'is_completed' => true,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'Tugas')->first()->id, // Mengambil ID list dengan nama 'Tugas'
            ],
            [
                'name' => 'PAIBP',
                'description' => 'Tugas presentasi pa budi',
                'is_completed' => false,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
            [
                'name' => 'Project Ujikom',
                'description' => 'Membuat project Todo App untuk ujikom',
                'is_completed' => false,
                'priority' => 'high',
                'list_id' => TaskList::where('name', 'Tugas')->first()->id,
            ],
        ];

        // Menyisipkan data ke dalam tabel Task
        Task::insert($tasks); // Menggunakan metode insert untuk memasukkan data ke database
    }
}
