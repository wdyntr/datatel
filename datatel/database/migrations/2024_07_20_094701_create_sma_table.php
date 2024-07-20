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
        Schema::create('sma', function (Blueprint $table) {
            $table->id();
            $table->string("nama")->nullable();
            $table->string("alamat")->nullable();
            $table->string("status")->nullable();
            $table->bigInteger("jumlah_siswa")->nullable();
            $table->string("kecamatan")->nullable();
            $table->string("kabupaten/kota")->nullable();
            $table->string("provinsi")->nullable();
            $table->string("jaringan_optik")->nullable();
            $table->string("odp")->nullable();
            $table->string("layanan_telkom")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sma');
    }
};
