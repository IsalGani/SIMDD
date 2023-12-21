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
        Schema::create('sub_bidangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bidang_id');
            $table->foreign('bidang_id')->references('id')->on('bidangs')->onDelete('cascade');
            $table->string('nama_sub_bidang');
            $table->year('tahun_anggaran');
            $table->decimal('realisasi_bidang', 10, 2);
            $table->decimal('anggaran_bidang', 10, 2);
            // Tambahkan atribut lain sesuai kebutuhan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_bidangs');
    }
};
