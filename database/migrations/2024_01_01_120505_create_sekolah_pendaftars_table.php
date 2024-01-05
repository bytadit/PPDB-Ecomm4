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
        Schema::create('sekolah_pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('npsn');
            $table->string('nama');
            $table->string('alamat');
            $table->unsignedBigInteger('status')->comment('1: Negeri; 2: Swasta');
            $table->dateTime('tanggal_lulus');
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
        Schema::dropIfExists('sekolah_pendaftars');
    }
};
