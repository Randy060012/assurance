<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taux extends Model
{
    use HasFactory;
    protected $fillable = [
        'apporteur_id',
        'categorie_id',
        'pourcentage',
        'supprimer'
    ];

    public function apporteur()
    {
        return $this->belongsTo(Apporteur::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

}
