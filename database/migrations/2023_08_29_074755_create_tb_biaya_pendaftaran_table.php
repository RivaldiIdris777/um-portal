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
        Schema::create('tb_biaya_pendaftaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pagi')->nullable();
            $table->integer('malam')->nullable();
            $table->string('nama_rekening')->nullable();
            $table->bigInteger('nomor_rekening')->nullable();
            $table->string('nama_nasabah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_biaya_pendaftaran');
    }
};
