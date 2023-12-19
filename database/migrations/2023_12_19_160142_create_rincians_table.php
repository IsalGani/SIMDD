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
        Schema::create('rincians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa');
            $table->integer('tahun_anggaran');
            $table->integer('total_realisasi');
            $table->integer('total_anggaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rincians');
    }
};
