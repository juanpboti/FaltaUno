<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartidoMod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partidos', function (Blueprint $table) {
            $table->Integer('lugar_id');
            $table->Integer('tipo_partido_id');
            $table->date('dia_partido');
            $table->time('hora_partido');
            $table->smallInteger('jugadores_faltantes');
            $table->boolean('partido_completo');

            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partidos', function (Blueprint $table) {
            $table->dropColumn('lugar_id');
            $table->dropColumn('tipo_partido_id');
            $table->dropColumn('dia_partido');
            $table->dropColumn('hora_partido');
            $table->dropColumn('jugadores_faltantes');
            $table->dropColumn('partido_completo');
        });
    }
}
