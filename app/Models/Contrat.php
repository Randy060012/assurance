<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable = [
        'apporteur_id',
        'categorie_id',
        'numero_police',
        'date_operation',
        'nom_assurer',
        'prenom_assurer',
        'date_effetuer',
        'date_echeance',
        'periode',
        'immatriculation',
        'marque',
        'tel_assurer',
        'num_attestation',
        'prime_nette',
        'commission',
        'commission_payer',
        'date_commission_payer',
        'montant_total',
        'montant_total_payer',
        'supprimer',
        'annule',
        'statut',
        'created_by',
        'update_by',
    ];
}
