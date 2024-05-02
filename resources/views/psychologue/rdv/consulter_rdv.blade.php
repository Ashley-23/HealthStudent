@extends('base', [
    'title' => 'Tableau de bord',
    'breadcrumbs' => ['Administration', 'Consulter mes rendez vous'],
])
@php($noComment = 'Aucun commantaire pour le moment')
@section('content')
    <div class="card-body pad table-responsive">
        @if ($rendezVous->isNotEmpty())
            <table class="table table-bordered text-center">
                <tr>
                    <th>N°</th>
                    <th>Etudiant</th>
                    <th>Heure</th>
                    <th>Commentaire </th>
                </tr>
                @foreach ($rendezVous as $key => $rdv)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $rdv->etudiant->nom }}&emsp;{{ $rdv->etudiant->prenom }}</td>
                        <td>{{ $rdv->heure_debut }}H - {{ $rdv->heure_fin }}H</td>
                        <td>



                            <form action="{{ route('rdvs.edit', $rdv->id) }}" method="get">
                                @csrf
                                <button type="submit" class="btn btn-primary" style= "margin-bottom: 10px;">Modifier</button>
                            </form>


                            <button class="btn btn-info"
                                onclick="document.getElementById('commentaire').innerText ='{{ $rdv->comentaire ?? $noComment }}'"
                                data-toggle="modal" data-target="#commentaire-modal">
                                Consulter
                            </button>


                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <div class="alert alert-warning alert-dismissible">
                {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
                <h5><i class='icon fas fa-exclamation-triangle'></i> Oups!</h5>
                Aucune demande de rendez-vous n'a été trouvé dans la base de données
            </div>
        @endif
    </div>

    <div class="modal fade" id="commentaire-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Consulter diagnostic</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="commentaire"></p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fermer</button>

                </div>
            </div>
        </div>
    </div>
@endsection
