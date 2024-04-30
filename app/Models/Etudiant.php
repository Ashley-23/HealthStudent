<?php

namespace App\Models;

use App\Models\RendezVous;
use App\Traits\Routing\GenerateUniqueSlugTrait;
use App\Traits\Routing\ModelsSlugKeyTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Etudiant extends Authenticatable
{
    use ModelsSlugKeyTrait, GenerateUniqueSlugTrait;

    public function hasSlugBaseKeyProvider(): bool
    {
        return false;
    }

    protected $fillable = [
        'nom',
        'prenom',
        'dateNaiss',
        'email',
        'tel',
        'password',
        'num_etu',
        'annee_entree',
        'ecole_id',
        'slug'
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    //un etusiant appartient a une ecole

    public function Ecole()
    {
        return $this->belongsTo(Ecole::class);
    }

    // Un etudiant a plusueurs rendez-vous
    public function RendezVous()
    {
        return $this->hasMany(RendezVous::class);
    }
}
