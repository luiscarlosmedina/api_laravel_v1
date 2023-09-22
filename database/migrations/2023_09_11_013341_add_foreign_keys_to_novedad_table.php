<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('novedad', function (Blueprint $table) {
            $table->foreign(['id_em'], 'novedad_ibfk_1')->references(['id_em'])->on('empleado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ID_S'], 'novedad_ibfk_2')->references(['ID_S'])->on('sede')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['T_Nov'], 'novedad_ibfk_3')->references(['T_Nov'])->on('tp_novedad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_evi'], 'novedad_ibfk_4')->references(['id_evi'])->on('evidencia')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('novedad', function (Blueprint $table) {
            $table->dropForeign('novedad_ibfk_1');
            $table->dropForeign('novedad_ibfk_2');
            $table->dropForeign('novedad_ibfk_3');
            $table->dropForeign('novedad_ibfk_4');
        });
    }
};
