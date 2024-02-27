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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('jabatan_id')->constrained('jabatan');
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->string('provinsi');
            $table->string('kota');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
