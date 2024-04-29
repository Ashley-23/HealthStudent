<?php

namespace App\Models;

use App\Models\Ecole;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'dateNaiss',
        'email',
        'tel',
        'num_admin',
        'annee_entree',
        'password'
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    // Un administrateur est dans une école
    public function Ecole(){
        return $this->belongsTo(Ecole::class);

    }
}
