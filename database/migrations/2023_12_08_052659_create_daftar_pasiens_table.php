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
        Schema::create('daftar_pasien', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_registrasi')->nullable();
            $table->string('no_antrian')->nullable();
            $table->string('loket')->nullable();
            $table->string('jenis_pasien')->nullable();
            $table->string('nama_pasien')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_rekam_medis')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('cara_bayar')->nullable();
            $table->string('tgl_kunjungan')->nullable();
            $table->string('poli_tujuan')->nullable();
            $table->string('dokter')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_pasien');
    }
};
