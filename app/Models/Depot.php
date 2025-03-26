<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depot extends Model
{
    use HasFactory;
    protected $fillable = [
        'contrat_id',
        'date',
        'montant',
        'libelle',
        'deposant',
        'telephone',
        'statut',
        'created_by',
        'updated_by',
        'annule',
        'supprimer'
    ];
}
