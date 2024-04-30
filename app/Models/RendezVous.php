<?php

namespace App\Models;

use App\Models\Etudiant;
use App\Models\Psychologue;
use App\Traits\Routing\GenerateUniqueSlugTrait;
use App\Traits\Routing\ModelsSlugKeyTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RendezVous extends Model
{
    use HasFactory;
    use ModelsSlugKeyTrait, GenerateUniqueSlugTrait;

    public function hasSlugBaseKeyProvider(): bool
    {
        return false;
    }

    protected $fillable = [
        'date',
        'heure_debut',
        'minute_debut',
        'heure_fin',
        'minute_fin',
        'commentaire',
        'slug'
    ];


    // un rendez-vous appartient à  un psychologue 
    public function Psychologue()
    {
        //importation de la classe psychologue
        return $this->belongsTo(Psychologue::class);
    }

    // un rendez-vous appartient à un etudiant 
    public function Etudiant()
    {
        //importation de la classe etudiant
        return $this->belongsTo(Etudiant::class);
    }
}
