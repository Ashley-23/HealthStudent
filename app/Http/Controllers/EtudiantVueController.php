<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Psychologue;
use App\Models\RendezVous;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EtudiantVueController extends Controller
{


    public function consulter_rdv() : View
    {
        $psychologues = Psychologue::all();

        return view('etudiant.rdv.consulter_rdv', compact('psychologues'));
    }

    public function liste_psy() : View
    {
        $psychologues = Psychologue::all();
<<<<<<< Updated upstream

        return view('etudiant.rdv.liste_psy', compact('psychologues'));
=======
        // $rdv = RendezVous::all();
        $rdv = RendezVous::with('psychologue')->get();

        return view('etudiant.rdv.liste_psy', compact('psychologues', 'rdv'));
>>>>>>> Stashed changes
    }

    public function prendre_rdv() : View
    {
<<<<<<< Updated upstream
        $psychologues = Psychologue::all();
=======
        $psychologue = Psychologue::all();
      
>>>>>>> Stashed changes

        return view('etudiant.rdv.prendre_rdv', compact('psychologues'));
    }

    public function settings() : View
    {
        //$etudiant = Etudiant::findOrFail($id);

        // return view('etudiant.rdv.settings', compact('etudiant'));

        return view('etudiant.rdv.settings')->with([
            'etudiants' => Etudiant::query()->where('id', request()->user()->id)->get()
        ]);
    }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
