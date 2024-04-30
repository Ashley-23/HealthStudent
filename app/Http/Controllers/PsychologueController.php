<?php

namespace App\Http\Controllers;

use App\Http\Requests\PsychologueRequest;
use App\Models\Psychologue;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse, Request};


class PsychologueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('admin.psychologues.index')->with([
            'psychologues' => Psychologue::query()->where('ecole_id', request()->user()->ecole_id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.psychologues.create')->with(['psychologue' => new Psychologue()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PsychologueRequest $request): RedirectResponse
    {
        dd('jy suis');
        Psychologue::query()->create($request->except('_token'));
        return to_route('admin.psychologues.index')->with(['success' => 'Psychologue ajouté.e avec succès']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Psychologue $psychologue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Psychologue $psychologue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Psychologue $psychologue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Psychologue $psychologue)
    {
        //
    }
}
