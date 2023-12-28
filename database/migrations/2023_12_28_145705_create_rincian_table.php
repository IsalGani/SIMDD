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
        Schema::create('rincian', function (Blueprint $table) {
            $table->id();
            $table->decimal('jumlah_anggaran', 10, 2);
            $table->decimal('jumlah_realisasi', 10, 2)->nullable();
            $table->foreignId('id_sub_bidang')->constrained('sub_bidang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rincian');
    }
};
