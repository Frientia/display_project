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
        Schema::create('kelas', function (Blueprint $table) {
            $table->string('id_kelas', 10)->primary();
            $table->string('nama_kelas', 25);
            $table->string('id_konsentrasi', 10);
            $table->string('id_semester', 10);
            $table->foreign('id_semester')->references('id_semester')->on('semester')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_konsentrasi')->references('id_konsentrasi')->on('konsentrasi')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
