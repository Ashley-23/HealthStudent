<?php

namespace App\Http\Controllers;

use App\Enums\RendezVousStatusEnum;
use App\Models\Psychologue;
use App\Models\RendezVous;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PsyVueController extends Controller
{


    public function liste_rdv(): View
    {

        $rendezVous = RendezVous::where('psychologue_id', request()->user()->id)->where('status', RendezVousStatusEnum::SOUMIS->value)->with('etudiant')->get();
        return view('psychologue.rdv.liste_rdv', ['rendezVous' => $rendezVous]);
    }

    public function confirm(RendezVous $rdv)
    {
        $rdv->update(['status' => RendezVousStatusEnum::VALIDE->value]);
        return redirect()->route('psychologue.rdv.liste_rdv');
    }

    public function decline(RendezVous $rdv)
    {
        $rdv->delete();
        return to_route('psychologue.rdv.liste_rdv')->with(['success' => 'Rendez-vous supprimé avec succès']);
    }

    public function consulter_rdv(): View
    {
        $rendezVous = RendezVous::where('psychologue_id', request()->user()->id)->where('status', RendezVousStatusEnum::VALIDE->value)->with('etudiant')->get();
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
