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
        Schema::create('hotel', function (Blueprint $table) {
            $table->id();
            $table->string("nama_akomodasi")->nullable();
            $table->string("klasifikasi")->nullable();
            $table->string("alamat")->nullable();
            $table->bigInteger("no_telp")->nullable();
            $table->bigInteger("jumlah_kamar")->nullable();
            $table->bigInteger("jumlah_tempat_tidur")->nullable();
            $table->string("kabupaten")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel');
    }
};
