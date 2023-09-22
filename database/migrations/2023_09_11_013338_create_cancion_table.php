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
        Schema::create('cancion', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('titulo', 128)->nullable();
            $table->integer('minutos')->nullable();
            $table->integer('segundos')->nullable();
            $table->string('interprete', 128)->nullable();
            $table->integer('id_Album')->nullable()->index('id_Album');

            $table->unique(['titulo', 'id_Album'], 'titulo_unico_cancion_album');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancion');
    }
};
