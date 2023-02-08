<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClesEtrangereStocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stocks', function (Blueprint $table) {
            //
            $table->unsignedInteger("id_magasin");
            $table->unsignedInteger("id_produit");
            $table->foreign("id_magasin")->references("id_magasin")->on("magasins")->onDelete("cascade");
            $table->foreign("id_produit")->references("id_produit")->on("produits")->onDelete("cascade");
            $table->primary(['id_produit','id_magasin']);
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
        Schema::table('stocks', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('id_magasin');
            $table->dropForeign('id_produit');
        });
    }
}
