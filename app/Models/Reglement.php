<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    use HasFactory;
    protected $fillable = [
        'police',
        'date',
        'montant',
        'statut',
        'memo',
        'created_by',
        'updated_by',
        'annule',
    ];
}
