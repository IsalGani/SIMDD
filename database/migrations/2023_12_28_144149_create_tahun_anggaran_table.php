<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tahun_anggaran', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->foreignId('id_desa')->constrained('desa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tahun_anggaran');
    }
};
