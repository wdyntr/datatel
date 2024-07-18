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
        Schema::create('dataPelanggan', function (Blueprint $table) {
            $table->string("witel");
            $table->string("ubis");
            $table->integer("Id_Number");
            $table->string("Nama_Akun");
            $table->string("AM");
            $table->integer("NIPNAS");
            $table->string("Nama_Grup");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataPelanggan');
    }
};
