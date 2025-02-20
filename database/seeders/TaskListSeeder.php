<?php

namespace Database\Seeders; // Menyatakan bahwa ini adalah bagian dari namespace Database\Seeders

use Illuminate\Database\Console\Seeds\WithoutModelEvents; // Menggunakan trait yang memungkinkan kita untuk menghindari peristiwa model saat seeding data (biasanya digunakan untuk mematikan event)

use Illuminate\Database\Seeder; // Mengimpor kelas Seeder untuk membuat seeder

use App\Models\TaskList; // Mengimpor model TaskList untuk digunakan dalam seeding data

class TaskListSeeder extends Seeder // Mendefinisikan kelas TaskListSeeder yang mewarisi dari Seeder
{
    /**
     * Run the database seeds.
     */
    
    // Fungsi ini dijalankan ketika menjalankan perintah artisan db:seed
    public function run(): void
    {
        // Menyusun array data yang akan disertakan ke dalam tabel TaskLists
        $lists = [
            [
                'name' => 'Liburan', // Nama kegiatan pertama
            ],
            [
                'name' => 'Belajar', // Nama kegiatan kedua
            ],
            [
                'name' => 'Tugas', // Nama kegiatan ketiga
            ]
        ];

        // Menyisipkan data ke dalam tabel TaskLists
        TaskList::insert($lists); // Menggunakan metode insert untuk memasukkan data ke database
    }
}  
