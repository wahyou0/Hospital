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
        Schema::create('konfirmasi_pasien', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_registrasi')->nullable();
            $table->string('no_antrian', 10)->nullable();
            $table->string('loket', 20)->nullable();
            $table->string('jenis_pasien', 20)->nullable();
            $table->string('nama_pasien')->nullable();
            $table->string('nik', 50)->nullable();
            $table->string('no_rekam_medis', 100)->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tgl_lahir', 20)->nullable();
            $table->string('no_hp', 15)->nullable();
            $table->string('cara_bayar',25)->nullable();
            $table->string('tgl_kunjungan', 12)->nullable();
            $table->string('poli_tujuan', 50)->nullable();
            $table->string('dokter', 100)->nullable();
            $table->string('konfirmasi', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konfirmasi_pasien');
    }
};
