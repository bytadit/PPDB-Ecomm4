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
        Schema::create('seleksi', function (Blueprint $table) {
            $table->id();
            $table->integer('status_proses')->nullable(true)->comment('{1: pendaftaran, 2: administrasi, 3:akademik, 4:wawancara, 5:final}');
            $table->float('nilai_wawancara')->nullable(true);
            $table->float('nilai_akademik')->nullable(true);
            $table->dateTime('tgl_tes_akademik')->nullable(true);
            $table->dateTime('tgl_tes_wawancara')->nullable(true);
            $table->boolean('status_seleksi')->default(0)->comment('{0: gagal, 1:lolos}');
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
        Schema::dropIfExists('seleksis');
    }
};
