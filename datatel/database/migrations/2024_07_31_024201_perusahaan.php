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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string("nama")->nullable();
            $table->string("alamat")->nullable();
            $table->string("kecamatan")->nullable();
            $table->string("kabupaten")->nullable();
            $table->string("provinsi")->nullable();
            $table->string("pelayanan")->nullable();
            $table->string("titik_koordinat")->nullable();
            $table->string("berlangganan")->nullable();
            $table->string("no_telp")->nullable();
            $table->string("jenis_layanan")->nullable();
            $table->string("status_berlangganan")->nullable();
            $table->string("tersedia_layanan")->nullable();
            $table->string("sosmed_email_pic")->nullable();
            $table->text("ket")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
