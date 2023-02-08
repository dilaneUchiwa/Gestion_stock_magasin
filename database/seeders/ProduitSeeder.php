<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produits')->insert([
            ['designation'=>'SITA ROSE','prix'=>1000,'id_categorie'=>1,'description'=>'je suis la description du produit x'],
            ['designation'=>'SITA','prix'=>1000,'id_categorie'=>1,'description'=>'je suis la description du produit x'],
            ['designation'=>'Eva','prix'=>3000,'id_categorie'=>2,'description'=>'je suis la description du produit x'],
            ['designation'=>'FAYTEX 30','prix'=>3000,'id_categorie'=>2,'description'=>'je suis la description du produit x'],
            ['designation'=>'FAYTEX Slim plus','prix'=>3000,'id_categorie'=>2,'description'=>'je suis la description du produit x'],
            ['designation'=>'FAYTEX Free','prix'=>3000,'id_categorie'=>2,'description'=>'je suis la description du produit x'],
            ['designation'=>'Couches Baby sita','prix'=>3000,'id_categorie'=>5,'description'=>'je suis la description du produit x'],
            ['designation'=>'Mouchoir de poche JOHN F jasmine','prix'=>3000,'id_categorie'=>6,'description'=>'je suis la description du produit x'],
            ['designation'=>'SCELA Confort','prix'=>3000,'id_categorie'=>6,'description'=>'je suis la description du produit x'],
            ['designation'=>'Fay','prix'=>3000,'id_categorie'=>6,'description'=>'je suis la description du produit x'],
            ['designation'=>'Fay JUMBO MID','prix'=>3000,'id_categorie'=>4,'description'=>'je suis la description du produit x'],
            ['designation'=>'Rouleau de cuisine SITA','prix'=>3000,'id_categorie'=>4,'description'=>'je suis la description du produit x']
        ]);
    }
}
