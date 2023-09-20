<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $fillable = [
        'marque',
        'modele',
       'annee',
       'cylindre',
       'carburant',
       'transmission',
        'kilometrage',
        'marticule',
        'prix',
        'image',
    ];
}
