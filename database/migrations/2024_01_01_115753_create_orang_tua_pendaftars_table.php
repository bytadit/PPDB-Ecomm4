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
        Schema::create('orang_tua_pendaftars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pekerjaan')->comment('{1: PNS; 2: Pengusaha; 3: Halo Dek; 4: Presiden; 5: Ketua Partai; 6: Youtuber; 7: Lain-lain}');
            $table->unsignedBigInteger('penghasilan')->comment('{1: Dibawah 1jt; 2: 1jt-3jt; 3: 3jt-10jt; 4: 10jt-30jt; 5: diatas 30jt}');
            $table->unsignedBigInteger('status')->comment('1:Ayah; 2:Ibu; 3:Wali');
            $table->tinyInteger('gender')->comment('{1: Laki-laki, 2: Perempuan}');
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
        Schema::dropIfExists('orang_tua_pendaftars');
    }
};
