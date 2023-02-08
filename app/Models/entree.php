<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entree extends Model
{
    use HasFactory;
    protected $fillable = [

        'id_magasin',
        'id_utilisateur',
    ];
}
