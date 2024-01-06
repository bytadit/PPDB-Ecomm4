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
            $table->integer('tes_akademik');
            $table->integer('tes_wawancara');
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
