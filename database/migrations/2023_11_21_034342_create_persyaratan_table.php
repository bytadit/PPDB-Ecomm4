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
        Schema::create('persyaratan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penerimaan');
            $table->foreign('id_penerimaan')->references('id')->on('penerimaan')->onDelete('cascade');
            $table->string('nama');
            $table->unsignedBigInteger('setting')->nullable();
            $table->unsignedBigInteger('jenis_persyaratan')->comment('1:prosedural; 2:teknis');
            $table->boolean('is_mandatory')->default(false);
            $table->integer('value')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persyaratans');
    }
};
