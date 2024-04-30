<?php

namespace App\Models;

use App\Models\Ecole;
use App\Traits\Routing\GenerateUniqueSlugTrait;
use App\Traits\Routing\ModelsSlugKeyTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
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
        'num_admin',
        'annee_entree',
        'password',
        'slug'
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
