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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('asal_sekolah');
            $table->string('no_telp');
            $table->date('tanggal_lahir');
            $table->string('bukti');
            $table->enum('status', ['aktif', 'pending','nonaktif']);
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
