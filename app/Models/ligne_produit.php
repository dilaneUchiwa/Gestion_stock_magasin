<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligne_produit extends Model
{
    use HasFactory;
    protected $fillable = [

        'quantite',
        'id_produit',
        'id_entree',
        'id_sortie',
        'id_commande'
    ];

}
