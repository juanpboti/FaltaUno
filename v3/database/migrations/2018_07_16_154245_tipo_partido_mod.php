<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoPartidoMod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipo_partido', function (Blueprint $table) {
            $table->Integer('partido_id');
            $table->smallInteger('cant_jugadores');
            $table->string('superficie');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipo_partido', function (Blueprint $table) {
            $table->dropColumn('partido_id');
            $table->dropColumn('cant_jugadores');
            $table->dropColumn('superficie');
        });
    }
}
