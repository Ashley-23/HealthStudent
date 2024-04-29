<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\View\View;
use Illuminate\Http\{RedirectResponse, Request};

class EtudiantController extends Controller
{
    public function index(): View
    {
        return view('admin.etudiants.index')->with([
            'etudiants' =>  Etudiant::all()
        ]);
    }

    public function create(): View
    {
        return view('admin.etudiants.create')->with(['etudiant' => new Etudiant()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        dd($request->except('_token'));
        Etudiant::query()->create($request->except('_token'));
        return to_route('admin_dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
