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
        Schema::create('tb_kontak', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->longText('googlemaplink')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kontak');
    }
};
