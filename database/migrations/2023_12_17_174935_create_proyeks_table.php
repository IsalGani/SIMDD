<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/yyyy_mm_dd_create_proyeks_table.php

public function up()
{
    Schema::create('proyek', function (Blueprint $table) {
        $table->id();
        $table->string('nama_proyek');
        $table->decimal('anggaran', 10, 2);
        $table->decimal('realisasi', 10, 2);
        $table->unsignedBigInteger('tahun_id');
        $table->unsignedBigInteger('desa_id');
        $table->timestamps();

        $table->foreign('tahun_id')->references('id')->on('tahun');
        $table->foreign('desa_id')->references('id')->on('desa');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyek');
    }
};
