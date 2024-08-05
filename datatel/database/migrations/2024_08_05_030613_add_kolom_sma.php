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
        Schema::table('sma', function (Blueprint $table) {
            $table->string('titik_koordinat')->nullable()->after('layanan_telkom');
            $table->string('jarak')->nullable();
            $table->string('layak_tidak')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sma', function (Blueprint $table) {
            $table->dropColumn('titik_koordinat');
            $table->dropColumn('jarak');
            $table->dropColumn('layak_tidak');
        });
    }
};
