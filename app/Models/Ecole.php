<?php

namespace App\Models;

//importation des modeles etudiant, psy, admin

use App\Models\Admin;
use App\Models\Etudiant;
use App\Models\Psychologue;
use App\Traits\Routing\{GenerateUniqueSlugTrait, ModelsSlugKeyTrait};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ecole extends Model
{
    use HasFactory;
    use ModelsSlugKeyTrait, GenerateUniqueSlugTrait;

    public function hasSlugBaseKeyProvider(): bool
    {
        return false;
    }

    protected $primarykey = "id";

    protected $fillable = [
        'nom', 'slug'
    ];

    // Une école a plusieurs administrateur

    public function Admins()
    {
        // importer la classe administrateur
        return $this->hasMany(Admin::class);
    }
    
    // Une école a plusieurs psychologues

    public function Psychologues()
    {
        // importer la classe psy
        return $this->hasMany(Psychologue::class);
    }

    // Une école a plusieurs élèves

    public function Etudiants()
    {
        // importer la classe etudiant
        return $this->hasMany(Etudiant::class);
    }
}
