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
        Schema::table('cancion', function (Blueprint $table) {
            $table->foreign(['id_Album'], 'cancion_ibfk_1')->references(['id'])->on('album')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cancion', function (Blueprint $table) {
            $table->dropForeign('cancion_ibfk_1');
        });
    }
};
