<?php

namespace App\Models;

use App\Enums\RendezVousStatusEnum;
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
        'heure_fin',
        'comentaire',
        'active',
        'slug',
        'psychologue_id',
        'etudiant_id',
        'status'
    ];

    protected function casts(): array
    {
        return [
            'status' => RendezVousStatusEnum::class
        ];
    }


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
