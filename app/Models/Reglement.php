<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    use HasFactory;
    protected $fillable = [
        'contrat_id',
        'date',
        'montant',
        'statut',
        'memo',
        'created_by',
        'updated_by',
        'annule',
        'supprimer'
    ];
}
