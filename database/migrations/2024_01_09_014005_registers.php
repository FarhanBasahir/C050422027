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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('ttl');
            $table->string('alamat_asal');
            $table->string('alamat_banjarmasin');
            $table->string('email');
            $table->string('motivasi');
            $table->string('pengalaman_organisasi');
            $table->string('pengalaman_kepanitiaan');
            $table->string('motto_hidup');
            $table->string('divisi');
            $table->timestamps();

            // $table->foreign('subject_id', 'subjectid_foreign')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
