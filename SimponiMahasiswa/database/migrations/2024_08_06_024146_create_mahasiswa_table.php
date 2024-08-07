<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('jurusan');
            $table->enum('waktu_kuliah', ['pagi', 'malam']);
            $table->string('agama');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->string('hasil_test');
            $table->enum('status', ['aktif', 'pending','nonaktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
