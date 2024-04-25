<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Ecole;
use App\Models\Etudiant;
use App\Models\RendezVous;
use App\Models\Psychologue;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AllController extends Controller
{
    //


        // pour les redirections au nivau de la connexion 
    public function connexion(Request $request)
    {
        $etudiant = Etudiant::all();
        $psy = Psychologue::all();
        $admin = Admin::all();
        $ecole = Ecole::all();
        $rdv = RendezVous::all();

        // dd("J'y suis ");

        // return view("admin.dashboard");

        // $this->validate(
        //     $request,
        //     [
        //         'nom' => 'required|min:3',
        //         'prenom' => 'required|min:3',
        //         'role' => 'required',
        //     ],
        //     [
        //         // 
        //         'login.required' => "Veuillez saisir le nom d'utilisateur",
        //         'password.required' => "Veuillez saisir le mot de passe",
        //     ]
        // );

        if($request->statut == "Etudiant")
        {
            dd($request->statut);
            return view('admin.etudiant');
        }

    }
}







