@extends('base', [
    'title' => 'Liste des étudiants',
	'breadcrumbs' => [
		'Administration', 'Liste des étudiants'
	]
])

@section('content')
    <div class="card-body pad table-responsive">
        @if ($etudiants->isNotEmpty())
            <table class="table table-bordered text-center">
                <tr>
                    <th>Nom du psychologue</th>
                    <th>date</th>
                    <th>Heure de debut</th>
                    <th>Heure de fin </th>
                    <th>Commentaire</th>
                </tr>
                @foreach ($etudiants as $etudiant)
                    <tr>
                        <td>{{ $etudiant->num_etu }}</td>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->email }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        @else
		<div class="alert alert-warning alert-dismissible">
			{{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
			<h5><i class='icon fas fa-exclamation-triangle'></i> Oups!</h5>
			Aun étudiant n'a été trouvé dans la base de données
		</div>
        @endif
    </div>
@endsection
