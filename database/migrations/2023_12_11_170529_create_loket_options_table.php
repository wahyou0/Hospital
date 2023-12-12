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
        Schema::create('loket_options', function (Blueprint $table) {
            $table->id();
            $table->string('kode_loket', 2)->nullable();
            $table->string('loket', 10)->nullable();
            $table->string('poli_tujuan', 30)->nullable();
            $table->string('dokter', 80)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loket_options');
    }
};
