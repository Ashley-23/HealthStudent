<?php

namespace App\Models;

use App\Models\Ecole;
use App\Models\RendezVous;
use App\Traits\Routing\GenerateUniqueSlugTrait;
use App\Traits\Routing\ModelsSlugKeyTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Psychologue extends Authenticatable
{
    use HasFactory;
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
        'num_psy',
        'annee_entree',
        'slug'
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    //un psy appartient a une ecole

    public function Ecole()
    {
        return $this->belongsTo(Ecole::class);
    }

    public function RendezVous()
    {
        return $this->hasMany(RendezVous::class);
    }
}
