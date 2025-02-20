<?php

use Illuminate\Database\Migrations\Migration; // Mengimpor kelas Migration untuk membuat migrasi database
use Illuminate\Database\Schema\Blueprint; // Mengimpor kelas Blueprint untuk mendefinisikan struktur tabel
use Illuminate\Support\Facades\Schema; // Mengimpor facade Schema untuk operasi skema database

return new class extends Migration // Mendefinisikan migrasi anonim yang mewarisi kelas Migration
{
    /**
     * Run the migrations.
     */
    
    // Fungsi ini digunakan untuk membuat perubahan pada database (menjalankan migrasi)
    public function up(): void 
    {
        // Membuat tabel 'task_lists' menggunakan Blueprint untuk mendefinisikan kolom
        Schema::create('task_lists', function (Blueprint $table) {
            $table->id(); // Membuat kolom 'id' sebagai primary key dan auto-increment
            $table->string('name')->unique(); // Membuat kolom 'name' bertipe string yang harus unik (tidak boleh ada duplikasi)
            $table->timestamps(); // Membuat kolom 'created_at' dan 'updated_at' secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    
    // Fungsi ini digunakan untuk membatalkan perubahan yang telah dilakukan (rollback migrasi)
    public function down(): void
    {
        // Menghapus tabel 'task_lists' jika tabel tersebut ada
        Schema::dropIfExists('task_lists');
    }
};
