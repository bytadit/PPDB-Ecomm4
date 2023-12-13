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
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->comment('Dokumen Pembayaran');
            $table->string('path')->comment('/dokumen/daftar.pdf');
            $table->unsignedBigInteger('tipe');
            $table->integer('max_size');
            $table->integer('jumlah')->default(1);
            $table->string('jenis_ekstensi');
            $table->string('deskripsi')->nullable();
            $table->unsignedBigInteger('id_penerimaan');
            $table->foreign('id_penerimaan')->references('id')->on('penerimaan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumens');
    }
};
