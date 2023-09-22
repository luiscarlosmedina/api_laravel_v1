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
        Schema::table('empleado', function (Blueprint $table) {
            $table->foreign(['ID_Doc'], 'empresa_ibfk_1')->references(['ID_Doc'])->on('tipo_doc')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ID_RH'], 'empresa_ibfk_2')->references(['ID_RH'])->on('rh')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ID_rol'], 'empresa_ibfk_3')->references(['ID_rol'])->on('rol')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ID_eps'], 'empresa_ibfk_4')->references(['ID_eps'])->on('eps')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ID_arl'], 'empresa_ibfk_5')->references(['ID_arl'])->on('arl')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ID_ces'], 'empresa_ibfk_6')->references(['ID_ces'])->on('cesantias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['ID_pens'], 'empresa_ibfk_7')->references(['ID_pens'])->on('pensiones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empleado', function (Blueprint $table) {
            $table->dropForeign('empresa_ibfk_1');
            $table->dropForeign('empresa_ibfk_2');
            $table->dropForeign('empresa_ibfk_3');
            $table->dropForeign('empresa_ibfk_4');
            $table->dropForeign('empresa_ibfk_5');
            $table->dropForeign('empresa_ibfk_6');
            $table->dropForeign('empresa_ibfk_7');
        });
    }
};
