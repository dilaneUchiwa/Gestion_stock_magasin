<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClesEtrangereLigneProduits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ligne_produits', function (Blueprint $table) {
            //
            $table->unsignedInteger("id_produit");
            $table->unsignedInteger("id_entree")->nullable();
            $table->unsignedInteger("id_sortie")->nullable();
            $table->unsignedInteger("id_commande")->nullable();
            $table->foreign("id_produit")->references("id_produit")->on("produits");
            $table->foreign("id_entree")->references("id_entree")->on("entrees");
            $table->foreign("id_sortie")->references("id_sortie")->on("sorties");
            $table->foreign("id_commande")->references("id_commande")->on("commandes");
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
        Schema::table('ligne_produits', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('id_produit');
            $table->dropForeign('id_entree');
            $table->dropForeign('id_sortie');
            $table->dropForeign('id_commande');
        });
    }
}
