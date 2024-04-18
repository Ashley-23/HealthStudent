<?php

namespace App\Models;

use App\Models\RendezVous;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use HasFactory;
    protected $primarykey = "id";

    protected $fillable = [
        'nom',
        'prenom',
        'dateNaiss',
        'email',
        'tel',
        'mot_de_passe',
        'num_etu',
        'annee_entree',
    ];


    //un etusiant appartient a une ecole
    
   public function Ecole(){
    return $this->belongsTo(Ecole::class);
    }

    // Un etudiant a plusueurs rendez-vous
    public function RendezVous(){
        return $this->hasMany(RendezVous::class);
    }
}
