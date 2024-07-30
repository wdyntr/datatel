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
        Schema::table('pdam', function (Blueprint $table) {
            $table->string('sosmed_pic')->nullable()->after('no_hp_pic');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pdam', function (Blueprint $table) {
            $table->dropColumn('sosmed_pic');
        });
    }
};
