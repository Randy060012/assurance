<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable = [
        'police',
        'date_ope',
        'nom',
        'prenom',
        'date_effet',
        'date_echeance',
        'periode',
        'immat',
        'marque',
        'tel_assure',
        'num_attest',
        'pnette',
        'commission',
        'compayer',
        'com_statut',
        'date_compayer',
        'prix_total',
        'sup',
        'statut',
        'created_by',
        'update_by',
    ];
}
