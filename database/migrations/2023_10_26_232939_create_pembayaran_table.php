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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('bukti_bayar');
            $table->boolean('status_bayar')->default(false)->comment('{0: belum, 1: sudah}');
            $table->integer('verifikasi')->nullable(true)->comment('{1: proses, 2: ditolak, 3: disetujui}');
            $table->unsignedBigInteger('id_pendaftar');
            $table->foreign('id_pendaftar')->references('id')->on('pendaftar')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
