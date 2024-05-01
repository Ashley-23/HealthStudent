<?php

namespace App\Http\Controllers;

use App\Models\Psychologue;
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

        return view('etudiant.rdv.liste_psy', compact('psychologues'));
    }

    public function prendre_rdv() : View
    {
        $psychologues = Psychologue::all();

        return view('etudiant.rdv.prendre_rdv', compact('psychologues'));
    }

    public function parametre() : View
    {
        $psychologues = Psychologue::all();

        return view('etudiant.settings', compact('psychologues'));
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
