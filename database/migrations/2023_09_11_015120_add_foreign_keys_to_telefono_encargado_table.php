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
        Schema::table('telefono_encargado', function (Blueprint $table) {
            $table->foreign(['ID_En'], 'fk_ID_En')->references(['ID_En'])->on('encargado')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('telefono_encargado', function (Blueprint $table) {
            $table->dropForeign('fk_ID_En');
        });
    }
};
