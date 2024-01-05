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
        Schema::create('nilai_pendaftars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_rapor');
            $table->foreign('id_rapor')->references('id')->on('rapors')->onDelete('cascade');
            $table->unsignedBigInteger('id_pendaftar');
            $table->foreign('id_pendaftar')->references('id')->on('pendaftar')->onDelete('cascade');
            $table->integer('nilai_rata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_pendaftars');
    }
};
