<?php

namespace App\Models;

use App\Models\Ecole;
use App\Models\RendezVous;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Psychologue extends Model
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
        'num_psy',
        'annee_entree',
    ];
    //un psy appartient a une ecole
    
   public function Ecole(){
    return $this->belongsTo(Ecole::class);
   }

   public function RendezVous(){
    return $this->hasMany(RendezVous::class);
    }

}
