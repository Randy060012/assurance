<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typedepense extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
    ];

    public function depense()
    {
        return $this->hasMany(Depense::class);
    }
}
