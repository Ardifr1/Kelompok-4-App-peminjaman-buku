<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel.
     */
    public function up(): void
    {
        // Menggunakan Schema dengan huruf kapital
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->unique();
            $table->string('nama');
            $table->string('username');
            $table->string('kelas');
            $table->string('password');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('registrasi');
    }
};