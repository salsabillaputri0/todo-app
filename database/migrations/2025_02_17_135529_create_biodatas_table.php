<?php

use Illuminate\Database\Migrations\Migration; // Mengimpor kelas Migration untuk membuat migrasi database
use Illuminate\Database\Schema\Blueprint; // Mengimpor kelas Blueprint untuk mendefinisikan struktur tabel
use Illuminate\Support\Facades\Schema; // Mengimpor facade Schema untuk operasi skema database

return new class extends Migration // Mendefinisikan migrasi anonim yang mewarisi kelas Migration
{
    /**
     * Run the migrations.
     */
    public function up() // Fungsi ini digunakan untuk membuat perubahan pada database (menjalankan migrasi)
    {
        Schema::create('biodatas', function (Blueprint $table) { // Membuat tabel 'biodatas' menggunakan Blueprint
            $table->id(); // Membuat kolom id sebagai primary key dan auto-increment
            $table->string('nama'); // Membuat kolom 'nama' dengan tipe string
            $table->string('alamat'); // Membuat kolom 'alamat' dengan tipe string
            $table->string('email'); // Membuat kolom 'email' dengan tipe string
            $table->string('telepon'); // Membuat kolom 'telepon' dengan tipe string
            $table->text('deskripsi'); // Membuat kolom 'deskripsi' dengan tipe text (untuk konten lebih panjang)
            $table->timestamps(); // Membuat kolom 'created_at' dan 'updated_at' secara otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // Fungsi ini digunakan untuk membatalkan perubahan yang telah dilakukan (rollback migrasi)
    {
        Schema::dropIfExists('biodatas'); // Menghapus tabel 'biodatas' jika ada
    }
};
