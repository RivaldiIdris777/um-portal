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
        Schema::create('tb_program_studi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_fakultas')->nullable();
            $table->string('nama_prodi')->nullable();
            $table->string('gelar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_program_studi');
    }
};
