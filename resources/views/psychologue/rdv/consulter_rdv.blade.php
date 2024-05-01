@extends('base', [
    'title' => 'Tableau de bord',
	'breadcrumbs' => [
		'Administration', 'Consulter mes rendez vous'
	]
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
                </tr>
                @foreach ($rendezVous as $rdv)
                    <tr>
                        <td>{{ $rdv->id }}</td>
                        <td>{{ $rdv->etudiant->nom }}&emsp;{{ $rdv->etudiant->prenom }}</td>
                        <td>{{ $rdv->heure_debut }}H  -  {{ $rdv->heure_fin }}H</td>
                        <td>{{ $rdv->commentaire }}</td>
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
