<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClesEtrangereSorties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sorties', function (Blueprint $table) {
            //
            $table->unsignedInteger("id_magasin");
            $table->unsignedInteger("id_utilisateur");
            $table->foreign("id_magasin")->references("id_magasin")->on("magasins");
            $table->foreign("id_utilisateur")->references("id")->on("users");
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sorties', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('id_magasin');
            $table->dropForeign('id_utilisateur');
        });
    }
}
