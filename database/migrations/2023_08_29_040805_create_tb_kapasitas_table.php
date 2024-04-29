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
        Schema::create('tb_kapasitas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jml_mahasiswa');
            $table->integer('jml_fakultas');
            $table->integer('jml_prodi');
            $table->integer('jml_dosen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kapasitas');
    }
};
