<?php

namespace App\Models;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RendezVous extends Model
{
    use HasFactory;

    protected $primaryKey= "id";

    protected $fillable = [
        'date',
        'heure_debut',
        'minute_debut',
        'heure_fin',
        'minute_fin',
        'commentaire',
    ];


    // // un rendez-vous appartient à  un psychologue 
    // public function Psychologue()
    // {
    //     //importation de la classe psychologue
    //     return $this->belongsTo(Psychologue::Class);
    // }

    // un rendez-vous appartient à un etudiant 
    public function Etudiant()
    {
        //importation de la classe etudiant
        return $this->belongsTo(Etudiant::Class);
    }

}
