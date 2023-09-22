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
        Schema::create('empleado', function (Blueprint $table) {
            $table->integer('id_em', true);
            $table->tinyInteger('ID_Doc')->index('empresa_ibfk_1');
            $table->string('documento', 15);
            $table->string('N_Em', 20);
            $table->string('A_Em', 20);
            $table->string('Eml_Em', 64)->nullable();
            $table->string('F_Em');
            $table->string('barloc_Em', 100);
            $table->string('Dir_Em', 70)->nullable();
            $table->string('Lic_Emp', 8);
            $table->string('lib_Em', 20);
            $table->string('tel_Em', 15);
            $table->string('contrato');
            $table->tinyInteger('ID_pens')->index('empresa_ibfk_7');
            $table->tinyInteger('ID_eps')->index('empresa_ibfk_4');
            $table->tinyInteger('ID_arl')->index('empresa_ibfk_5');
            $table->tinyInteger('ID_ces')->index('empresa_ibfk_6');
            $table->tinyInteger('ID_RH')->index('empresa_ibfk_2');
            $table->tinyInteger('ID_rol')->index('empresa_ibfk_3');
            $table->string('estado', 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
};
