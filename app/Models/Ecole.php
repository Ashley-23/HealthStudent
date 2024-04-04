<?php

namespace App\Models;

//importation des modeles etudiant, psy, admin

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    use HasFactory;

    protected $primarykey = "id";

    protected $fillable = [
        'nom',
    ];

    // Une école a plusieurs administrateur

    // public function Administrateurs()
    // {
    //     // importer la classe administrateur
    //     return $this->hashMany(Admin::class);
    // }
    // Une école a plusieurs psychologues

    // public function Psychologues()
    // {
    //     // importer la classe psy
    //     return $this->hashMany(Psychologues::class);
    // }

    // Une école a plusieurs élèves

    // public function Etudiants()
    // {
    //     // importer la classe etudiant
    //     return $this->hashMany(Etudiant::class);
    // }
}
