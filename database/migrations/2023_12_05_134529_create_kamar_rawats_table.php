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
        Schema::create('kamar_rawat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruangan');
            $table->string('fasilitas');
            $table->integer('isi')->nullable();
            $table->integer('kosong')->nullable();
            $table->integer('jumlah_kamar')->nullable();
            $table->string('kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar_rawat');
    }
};
