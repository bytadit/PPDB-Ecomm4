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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_awal');
            $table->dateTime('tgl_akhir');
            $table->unsignedBigInteger('id_penerimaan');
            $table->unsignedBigInteger('id_jenis_kegiatan');
            $table->foreign('id_penerimaan')->references('id')->on('penerimaan')->onDelete('cascade');
            $table->foreign('id_jenis_kegiatan')->references('id')->on('jenis_kegiatan')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
