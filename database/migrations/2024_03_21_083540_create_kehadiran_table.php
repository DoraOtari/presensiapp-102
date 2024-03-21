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
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('foto_masuk');
            $table->string('pukul_masuk');
            $table->string('lokasi_masuk');
            $table->string('foto_keluar')->nullable();
            $table->string('pukul_keluar')->nullable();
            $table->string('lokasi_keluar')->nullable();
            $table->string('tgl');
            $table->string('bln');
            $table->string('thn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehadiran');
    }
};
