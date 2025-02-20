<?php

use Illuminate\Database\Migrations\Migration; // Mengimpor kelas Migration untuk membuat migrasi database
use Illuminate\Database\Schema\Blueprint; // Mengimpor kelas Blueprint untuk mendefinisikan struktur tabel
use Illuminate\Support\Facades\Schema; // Mengimpor facade Schema untuk operasi skema database

return new class extends Migration // Mendefinisikan migrasi anonim yang mewarisi kelas Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // Fungsi ini digunakan untuk membuat perubahan pada database (menjalankan migrasi)
    {
        // Membuat tabel 'tasks' menggunakan Blueprint untuk mendefinisikan kolom
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Membuat kolom 'id' sebagai primary key dan auto-increment
            $table->string('name'); // Membuat kolom 'name' untuk menyimpan nama tugas
            $table->string('description')->nullable(); // Membuat kolom 'description' untuk menyimpan deskripsi tugas yang dapat bernilai null
            $table->boolean('is_completed')->default(false); // Membuat kolom 'is_completed' bertipe boolean, default-nya adalah false (belum selesai)
            $table->enum('priority',['low','medium','high'])->default('medium'); // Membuat kolom 'priority' yang bertipe enum, dengan pilihan 'low', 'medium', atau 'high', default-nya adalah 'medium'
            $table->timestamps(); // Membuat kolom 'created_at' dan 'updated_at' secara otomatis
            $table->foreignId('list_id')->constrained('task_lists','id')->onDelete('cascade'); // Membuat kolom 'list_id' sebagai foreign key yang mengacu ke kolom 'id' di tabel 'task_lists', dan akan menghapus semua tugas terkait jika task list dihapus (cascade delete)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // Fungsi ini digunakan untuk membatalkan perubahan yang telah dilakukan (rollback migrasi)
    {
        Schema::dropIfExists('tasks'); // Menghapus tabel 'tasks' jika tabel tersebut ada
    }
};
