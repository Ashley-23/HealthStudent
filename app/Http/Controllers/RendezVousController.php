<?php

namespace App\Http\Controllers;

use App\Http\Requests\RendezVousRequest;
use App\Models\RendezVous;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
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
    public function store(RendezVousRequest $request): RedirectResponse
    {
        RendezVous::query()->create($request->except('_token'));
        return to_route('etudiant.rdv.consulter_rdv')->with(['success' => 'Rendez-vous pris avec succès']);
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
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    public function edit($id)
    {
        $rdv = RendezVous::findOrFail($id);

        return view('psychologue.rdv.edit', compact('rdv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request) :RedirectResponse
    {
        RendezVous::whereId($request->id)->update($request->except('_token'));

        return to_route('psychologue.rdv.consulter_rdv')->with(['success' => 'Rendez-vous modifié.e avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
