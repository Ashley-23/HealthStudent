<?php

namespace App\Http\Controllers;

use App\Models\{
    Admin,
    Etudiant,
    Psychologue
};
use Illuminate\Http\{RedirectResponse, Request};
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\Hash;

class AllController extends Controller
{
    public function connexion(Request $request): RedirectResponse
    {
        // if($request->user())
        // return to_route('')
        $request->validate([
            'statut' => 'required', // Assurez-vous que le statut est requis
            'username' => 'required', // Assurez-vous que le nom d'utilisateur est requis
            'pass' => 'required', // Assurez-vous que le mot de passe est requis
        ]);

        $statut = $request->get('statut');
        $password = $request->get('pass');
        $username = $request->get('username');

        switch ($statut) {
            case 'etudiant':
                $user = Etudiant::where('num_etu', $username)->first();
                break;
            case 'psychologue':
                $user = Psychologue::where('num_psy', $username)->first();
                break;
            case 'administrateur':
                $user = Admin::where('num_admin', $username)->first();
                break;
            default:
                return back()->withInput()->withErrors(['statut' => 'Le statut sélectionné est invalide']);
        }

        if (!($user && Hash::check($password, $user->mot_de_passe))) {
            return back()->withInput()->withErrors(['login' => 'Identifiants invalides']);
        }

        $route = match ($statut) {
            'etudiant' => to_route('etudiant_dashboard'),
            'psychologue' => to_route('psychologue_dashboard'),
            'administrateur' => to_route('admin_dashboard'),
        };

        return $route;
    }
}
