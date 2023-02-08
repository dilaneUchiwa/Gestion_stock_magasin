<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        "designation",
        "description",
        "nature",
        'volume',
        'poids',
        "type",
        'unite',
        "prix",
        'id_famille'
];

    public function famille(){
        return $this->belongsTo('App\Models\famille','id_famille','id_famille')->withTrashed();
    }
}
