<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eleves extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'dateDeNaissance',
        'etablissement',
        'ine',
        'niveau',
    ];
}
