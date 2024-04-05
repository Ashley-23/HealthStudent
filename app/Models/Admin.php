<?php

namespace App\Models;

use App\Models\Ecole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
        'prenom',
        'dateNaiss',
        'email',
        'tel',
        'num_admin',
        'annee_entree'
    ];

    // Un administrateur est dans une école
    public function Ecole(){
        return $this->belongsTo(Ecole::class);

    }
    

}
