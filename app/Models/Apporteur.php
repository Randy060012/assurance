<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apporteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'nom',
        'prenom',
        'telephone',
        'taux_taxe',
        'supprimer'
    ];

    public function taux()
    {
        return $this->hasMany(Taux::class);
    }
}

