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
        Schema::create('penerimaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jenjang');
            $table->unsignedBigInteger('id_jalur');
            $table->year('periode');
            $table->boolean('is_open');
            $table->foreign('id_jenjang')->references('id')->on('jenjang')->onDelete('cascade');
            $table->foreign('id_jalur')->references('id')->on('jalur')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerimaans');
    }
};
