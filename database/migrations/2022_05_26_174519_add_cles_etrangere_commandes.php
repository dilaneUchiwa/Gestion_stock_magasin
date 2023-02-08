<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClesEtrangereCommandes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commandes', function (Blueprint $table) {
            //
            $table->unsignedInteger("id_magasin");
            $table->unsignedInteger("id_utilisateur");
            $table->unsignedInteger("id_magasin_e");
            $table->unsignedInteger("id_magasin_r");
            $table->foreign("id_magasin")->references("id_magasin")->on("magasins");
            $table->foreign("id_utilisateur")->references("id")->on("users");
            $table->foreign("id_magasin_e")->references("id_magasin")->on("magasins");
            $table->foreign("id_magasin_r")->references("id_magasin")->on("magasins");
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
        Schema::table('commandes', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('id_magasin');
            $table->dropForeign('id_utilisateur');
            $table->dropForeign('id_magasin_e');
            $table->dropForeign('id_magasin_r');

        });
    }
}
