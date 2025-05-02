<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'libelle',
        'supprimer'
    ];

    public function taux()
    {
        return $this->hasMany(Taux::class);
    }
}
