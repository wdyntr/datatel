<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNoHpPicColumnInPdamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pdam', function (Blueprint $table) {
            // Mengubah tipe kolom no_hp_pic dari bigInteger ke string
            $table->string('no_hp_pic')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pdam', function (Blueprint $table) {
            // Mengubah tipe kolom no_hp_pic kembali ke bigInteger
            $table->bigInteger('no_hp_pic')->nullable()->change();
        });
    }
}

