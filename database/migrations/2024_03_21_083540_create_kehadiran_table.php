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
            $table->foreignId('users')->constrained();
            $table->string('keterangan');
            $table->string('foto_masuk');
            $table->string('pukul_masuk');
            $table->string('lokasi_masuk');
            $table->string('foto_keluar');
            $table->string('pukul_keluar');
            $table->string('lokasi_keluar');
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
