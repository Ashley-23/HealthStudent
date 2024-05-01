<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRequest;
use App\Models\Etudiant;
use Illuminate\View\View;
use Illuminate\Http\{RedirectResponse, Request};

class EtudiantController extends Controller
{
    public function index(): View
    {
        return view('admin.etudiants.index')->with([
            'etudiants' => Etudiant::query()->where('ecole_id', request()->user()->ecole_id)->get()
        ]);
    }

    public function create(): View
    {
        return view('admin.etudiants.create')->with(['etudiant' => new Etudiant()]);
    }

    
    public function store(EtudiantRequest $request): RedirectResponse
    {
        Etudiant::query()->create($request->except('_token'));
        return to_route('admin.etudiants.index')->with(['success' => 'Étudiant.e ajouté.e avec succès']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //
    }




    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);

        return view('admin.etudiants.edit', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EtudiantRequest $request) :RedirectResponse
    {

        // Psychologue::whereId($id)->update($validatedData);
        //dd($request->id);
        Etudiant::whereId($request->id)->update($request->except('_token'));

        return to_route('admin.etudiants.index')->with(['success' => 'Etudiant modifié.e avec succès']);
    }


    public function destroy($id)
    {

        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();

        // return redirect('/cars')->with('success', 'Voiture supprimer avec succèss');
        return to_route('admin.etudiants.index')->with(['success' => 'Etudiant supprimé.e avec succès']);
    }


}
