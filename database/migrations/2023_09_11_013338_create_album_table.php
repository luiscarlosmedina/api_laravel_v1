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
        Schema::create('album', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('titulo', 128)->nullable();
            $table->integer('anho')->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->string('medio', 6)->nullable();
            $table->integer('id_usuario')->nullable()->index('id_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album');
    }
};
