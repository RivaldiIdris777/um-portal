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
        Schema::create('tb_rplbiayaperkuliahan', function (Blueprint $table) {
            $table->id();
            $table->string('program');
            $table->integer('biayapendidikan');
            $table->integer('biayarekognisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_rplbiayaperkuliahan');
    }
};
