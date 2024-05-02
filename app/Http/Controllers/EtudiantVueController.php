<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantRequest;
use App\Models\Etudiant;
use App\Models\Psychologue;
use App\Models\RendezVous;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Throwable;

class EtudiantVueController extends Controller
{
    static array $allHours = [8, 9, 10, 11, 14, 15, 16, 17];


    public function consulter_rdv(): View
    {
        $psychologues = Psychologue::all();

        // return view('etudiant.rdv.consulter_rdv', compact('psychologues'));

        return view('etudiant.rdv.consulter_rdv')->with([
            'etudiants' => RendezVous::query()->where('etudiant_id', request()->user()->id)->orderBy('date')->with('psychologue')->get()
        ]);
    }

    public function liste_psy(): View
    {
        $psychologues = Psychologue::all();
        // $rdv = RendezVous::all();
        $rdv = RendezVous::with('psychologue')->get();

        return view('etudiant.rdv.liste_psy', compact('psychologues', 'rdv'));
    }


    public function prendre_rdv(Psychologue $psy): View
    {
        return view('etudiant.rdv.prendre_rdv', compact('psy'));
    }

    public function settings($id): View
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


    public function update(Request $request): RedirectResponse
    {
        // dd('jy suis', $request);
        Etudiant::whereId($request->id)->update($request->except('_token', '_method'));

        return to_route('etudiant_dashboard')->with(['success' => 'Etudiant modifié.e avec succès']);
    }

    public function getAvailableHours(Request $request): Response
    {
        $psyId = $request->get('psyId');
        $date = $request->get('date');

        if (!$psyId || !$date) {
            return response([
                'message' => 'Les données fournies ne sont pas valables'
            ], 500);
        }

        try {
            $date = Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
        } catch (Throwable $th) {
            return response([
                'message' => $th->getMessage()
            ], 500);
        }

        try {
            $notAvailableHours = RendezVous::query()->where('psychologue_id', $psyId)->where('date', $date)->get()->sortBy('heure_debut')->pluck('heure_debut');
            if ($notAvailableHours->count() >= 8) {
                return response([
                    'message' => 'Aucune plage horaire de disponible'
                ], 404);
            }

            $availableHours = collect(static::$allHours)->diff($notAvailableHours);

            if ($availableHours->isEmpty()) {
                return response([
                    'message' => 'Aucune plage horaire de disponible'
                ], 404);
            }
            $availableHours = $availableHours->values();
        } catch (Throwable $th) {
            return response([
                'message' => $th->getMessage()
            ], 500);
        }

        return response([
            'data' => $availableHours
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
