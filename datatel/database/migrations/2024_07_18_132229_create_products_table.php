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
        Schema::create('datapelanggan', function (Blueprint $table) {
            $table->id();
            $table->string("witel")->nullable();
            $table->string("ubis")->nullable();
            $table->integer("id_number")->nullable();
            $table->string("nama_akun")->nullable();
            $table->string("am")->nullable();
            $table->bigInteger("nipnas")->nullable();
            $table->string("nama_grup")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapelanggan');
    }
};
