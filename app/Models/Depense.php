<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'montant',
        'date',
        'type',
        'created_by',
        'updated_by',
        'sup',
    ];
}
