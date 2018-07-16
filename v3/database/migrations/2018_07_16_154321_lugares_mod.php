<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LugaresMod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lugares', function (Blueprint $table) {
            $table->Integer('partido_id');
            $table->string('direccion');
            $table->string('barrio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lugares', function (Blueprint $table) {
            $table->dropColumn('partido_id');
            $table->dropColumn('direccion');
            $table->dropColumn('barrio');
        });
    }
}
