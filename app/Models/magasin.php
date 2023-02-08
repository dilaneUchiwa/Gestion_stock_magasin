<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class magasin extends Model
{
    use HasFactory;
    protected $fillable = [

        'nom',
        'agence'
    ];

}
