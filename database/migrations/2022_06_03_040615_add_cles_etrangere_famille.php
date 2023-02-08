<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClesEtrangereFamille extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('familles', function (Blueprint $table) {
            //
            $table->unsignedInteger("id_categorie")->nullable;
            $table->foreign("id_categorie")->references("id_categorie")->on("categories")
            ->OnDelete("set null");
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
        Schema::table('familles', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('(id_categorie)');

        });
    }
}
