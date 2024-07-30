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
        Schema::create('pdam', function (Blueprint $table) {
            $table->id();
            $table->string("kategori")->nullable();
            $table->string("nama_pelanggan")->nullable();
            $table->string("nama_am")->nullable();
            $table->string("alamat")->nullable();
            $table->string("kecamatan")->nullable();
            $table->string("kabupaten")->nullable();
            $table->string("concat")->nullable();
            $table->string("provinsi")->nullable();
            $table->string("pelayanan")->nullable();
            $table->string("koordinat")->nullable();
            $table->string("email_pic")->nullable();
            $table->bigInteger("no_hp_pic")->nullable();
            $table->string("tersedia_layanan")->nullable();
            $table->string("status_berlangganan")->nullable();
            $table->string("jenis_layanan")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
