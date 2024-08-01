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
        Schema::create('wisataKuliner', function (Blueprint $table) {
            $table->id();
            $table->string("nama")->nullable();
            $table->string("lokasi")->nullable();
            $table->string("berlangganan")->nullable();
            $table->string("email_sosmed")->nullable();
            $table->string("jenis_layanan")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisataKuliner');
    }
};
