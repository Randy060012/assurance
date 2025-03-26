<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_depense_id',
        'libelle',
        'montant',
        'description',
        'date',
        'type',
        'created_by',
        'updated_by',
        'supprimer',
    ];
}
