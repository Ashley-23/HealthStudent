<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
