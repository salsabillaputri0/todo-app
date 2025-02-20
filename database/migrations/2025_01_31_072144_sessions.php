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
        // Membuat tabel 'sessions' menggunakan Blueprint untuk mendefinisikan kolom
        Schema::create('sessions', function (Blueprint $table) { 
            $table->string('id')->primary(); // Membuat kolom 'id' bertipe string dan menjadikannya primary key
            $table->foreignId('user_id')->nullable()->index(); // Membuat kolom 'user_id' bertipe foreignId, bisa null, dan mengindeksnya untuk performa query
            $table->string('ip_address', 45)->nullable(); // Membuat kolom 'ip_address' bertipe string dengan panjang maksimal 45 karakter (untuk mendukung IPv6), bisa null
            $table->text('user_agent')->nullable(); // Membuat kolom 'user_agent' bertipe text untuk menyimpan informasi user agent browser, bisa null
            $table->longText('payload'); // Membuat kolom 'payload' bertipe longText untuk menyimpan data session yang lebih besar
            $table->integer('last_activity')->index(); // Membuat kolom 'last_activity' bertipe integer untuk mencatat waktu aktivitas terakhir, dan mengindeksnya
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // Fungsi ini digunakan untuk membatalkan perubahan yang telah dilakukan (rollback migrasi)
    {
        Schema::dropIfExists('sessions'); // Menghapus tabel 'sessions' jika tabel tersebut ada
    }
};
