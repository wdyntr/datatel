<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faskes', function (Blueprint $table) {
            $table->id();
            $table->string("kode_puskesmas")->nullable();
            $table->string("kode_puskesmas2")->nullable();
            $table->string("nama_puskes")->nullable();
            $table->string("treg")->nullable();
            $table->string("witel")->nullable();
            $table->string("alamat")->nullable();
            $table->string("kecamatan")->nullable();
            $table->string("kabupaten")->nullable();
            $table->string("concat")->nullable();
            $table->string("provinsi")->nullable();
            $table->string("pelayanan")->nullable();
            $table->string("wilayah_kerja")->nullable();
            $table->string("lat")->nullable();
            $table->string("lon")->nullable();
            $table->string("lat_long")->nullable();
            $table->string("ketersediaan_jaringan_optik")->nullable();
            $table->string("layanan_telkom")->nullable();
            $table->string("kompetitor_eksisting")->nullable();
            $table->string("rekomendasi")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faskes');
    }
};
