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
        Schema::create('batas_nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penerimaan');
            $table->foreign('id_penerimaan')->references('id')->on('penerimaan')->onDelete('cascade');
            $table->integer('tes_akademik')->default(0);
            $table->integer('tes_wawancara')->default(0);
            $table->integer('nilai_akhir')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batas_nilais');
    }
};
