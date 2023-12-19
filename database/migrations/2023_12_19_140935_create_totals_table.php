<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalsTable extends Migration
{
    public function up()
    {
        Schema::create('totals', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa');
            $table->integer('tahun_anggaran');
            $table->integer('total_realisasi');
            $table->integer('total_anggaran');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('totals');
    }
}
