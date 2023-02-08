<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorieS')->insert([
            ['nom'=>'PAPIERS HYGIENIQUES'],
            ['nom'=>'SERVIETTES HYGIENIQUES'],
            ['nom'=>'RAMETTES'],
            ['nom'=>'DIVERS'],
            ['nom'=>'COUCHES BEBES ET LINGETTES'],
            ['nom'=>'MOUCHOIRS'],
            ['nom'=>'CAHIERS'],
            ['nom'=>'ARTICLES DE PANSEMENT'],
        ]);

    }
}
