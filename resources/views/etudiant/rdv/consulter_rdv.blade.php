@extends('base', [
    'title' => 'Consulter mes rendez-vous',
])
@php($noComment = 'Aucun commantaire pour le moment')
@section('content')
    <div class="card-body pad table-responsive">
        @if ($etudiants->isNotEmpty())
            <table class="table table-bordered text-center">
                <tr>

                    <th>Psychologue </th>
                    <th>Date </th>
                    <th>Heure </th>
                    <th>Statut </th>
                    <th> </th>
                </tr>
                {{-- dd($etudiants, $etudiants[0]->psychologue) --}}
                @foreach ($etudiants as $rdv)
                    <tr>
                        <td> {{ $rdv->psychologue->nom }} {{ $rdv->psychologue->prenom }}</td>
                        <td> {{ $rdv->date }}</td>
                        <td> {{ $rdv->heure_debut }}H - {{ $rdv->heure_fin }}H</td>
                        <td> {{ $rdv->status->value }} </td>
                        <td>
                            <button class="btn btn-primary" 
                            onclick="document.getElementById('commentaire').innerText ='{{ $rdv->comentaire ?? $noComment }}'" data-toggle="modal" data-target="#commentaire-modal">
                                Détails </button>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <div class="alert alert-warning alert-dismissible">
                {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
                <h5><i class='icon fas fa-exclamation-triangle'></i> Oups!</h5>
                Aucun rendez-vous pour le moment.
            </div>
        @endif
    </div>
    <div class="modal fade" id="commentaire-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Commentaire du Psychologue</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="commentaire"></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary"
                        data-dismiss="modal">Fermer</button>

                </div>
            </div>
        </div>
    </div>
@endsection
