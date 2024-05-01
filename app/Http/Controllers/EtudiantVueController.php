<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRequest;
use App\Models\Etudiant;
use App\Models\Psychologue;
use App\Models\RendezVous;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EtudiantVueController extends Controller
{


    public function consulter_rdv() : View
    {
        $psychologues = Psychologue::all();

        // return view('etudiant.rdv.consulter_rdv', compact('psychologues'));

        return view('etudiant.rdv.consulter_rdv')->with([
            'etudiants' => RendezVous::query()->where('id', request()->user()->id)->with('psychologue')->get()
        ]);
    }

    public function liste_psy() : View
    {
        $psychologues = Psychologue::all();
        // $rdv = RendezVous::all();
        $rdv = RendezVous::with('psychologue')->get();

        return view('etudiant.rdv.liste_psy', compact('psychologues', 'rdv'));
    }

    
    public function prendre_rdv($id) : View
    {
        $psychologues = Psychologue::all();
        $psy = Psychologue::all()->where('id', $id);
        $rdv = RendezVous::all()->where('psychologue_id', $id);
        // dd($psychologues, $rdv, $psy);
        return view('etudiant.rdv.prendre_rdv', compact('psychologues', 'psy'));
    }

    public function settings($id) : View
    {
        // return view('etudiant.rdv.settings')->with([
        //     'etudiants' => Etudiant::query()->where('id', request()->user()->id)->get()
        // ]);

        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.rdv.settings', compact('etudiant'));
    }

    public function edit($id): View
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.rdv.settings', compact('etudiant'));
    }


    public function update(Request $request) : RedirectResponse
    {
        // dd('jy suis', $request);
        Etudiant::whereId($request->id)->update($request->except('_token','_method'));

        return to_route('etudiant_dashboard')->with(['success' => 'Etudiant modifié.e avec succès']);
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    
}

