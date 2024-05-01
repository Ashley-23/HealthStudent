<?php

namespace App\Http\Controllers;

use App\Models\Psychologue;
use App\Models\RendezVous;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PsyVueController extends Controller
{
  

    public function liste_rdv() : View
    {

        $rendezVous = RendezVous::where('psychologue_id', request()->user()->id)->where('active', 'f')->with('etudiant')->get();
        return view('psychologue.rdv.liste_rdv', ['rendezVous' => $rendezVous]);
    }

    public function confirm($id)
    {
        RendezVous::whereId($id)->update(['active' => 't']);
        return redirect()->route('psychologue.rdv.liste_rdv');
    }

    public function decline($id)
    {
        RendezVous::whereId($id)->update(['active' => 's']);
        return redirect()->route('psychologue.rdv.liste_rdv');
    }


    public function consulter_rdv() : View
    {

        $rendezVous = RendezVous::where('psychologue_id', request()->user()->id)->where('active', 't')->with('etudiant')->get();
        return view('psychologue.rdv.consulter_rdv', ['rendezVous' => $rendezVous]);
    }

    public function edit($id): View
    {
        $psy = Psychologue::findOrFail($id);
        // ]);
        return view('psychologue.settings', compact('psy'));
    }


    public function update(Request $request, string $id)
    {

        Psychologue::whereId($id)->update($request->except('_token'));

        return to_route('psychologue_dashboard')->with(['success' => 'Psychologue modifié.e avec succès']);
    }

}
