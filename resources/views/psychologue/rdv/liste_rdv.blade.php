@extends('base', [
    'title' => 'Tableau de bord',
    'breadcrumbs' => ['Administration', 'Liste des rendez vous'],
])

@section('content')
    <div class="card-body pad table-responsive">
        @if ($rendezVous->isNotEmpty())
            <table class="table table-bordered text-center">
                <tr>
                    <th>N°</th>
                    <th>Etudiant</th>
                    <th>Heure</th>
                    <th>Commentaire </th>
                    <th></th>
                </tr>
                @foreach ($rendezVous as $key => $rdv)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $rdv->etudiant->nom }}&emsp;{{ $rdv->etudiant->prenom }}</td>
                        <td>{{ $rdv->heure_debut }}H - {{ $rdv->heure_fin }}H</td>
                        <td>{{ $rdv->commentaire }}</td>
                        <td>

                            <div class="modal fade" id="modal-danger{{ $rdv->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-danger">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Attention !!!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Voulez-vous vraiment supprimer le psychologue {{ $rdv->etudiant->nom }}
                                                {{ $rdv->etudiant->prenom }} ? &hellip;</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light"
                                                data-dismiss="modal">Fermer</button>

                                            <form action="{{ route('psychologue.rdv.decline', $rdv) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-light">Supprimer</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="{{ route('psychologue.rdv.confirm', $rdv) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary"
                                    style= "margin-bottom: 10px;">Confimer</button>
                            </form>
                            {{-- <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Modifier</a> --}}
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#modal-danger{{ $rdv->id }}">
                                Décliner
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
@endsection
