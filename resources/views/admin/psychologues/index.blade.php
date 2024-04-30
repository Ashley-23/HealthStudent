@extends('base', [
    'title' => 'Liste des psychologues',
	'breadcrumbs' => [
		'Administration', 'Liste des psychologues'
	]
])

@section('content')
    <div class="card-body pad table-responsive">
        @if ($psychologues->isNotEmpty())
            <table class="table table-bordered text-center">
                <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Prenom </th>
                    <th>Email </th>
                    <th></th>
                </tr>
                @foreach ($psychologues as $psychologue)
                    <tr>
                        <td>{{ $psychologue->num_psy }}</td>
                        <td>{{ $psychologue->nom }}</td>
                        <td>{{ $psychologue->prenom }}</td>
                        <td>{{ $psychologue->email }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        @else
		<div class="alert alert-warning alert-dismissible">
			{{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
			<h5><i class='icon fas fa-exclamation-triangle'></i> Oups!</h5>
			Aucun psychologue n'a été trouvé dans la base de données
		</div>
        @endif
    </div>
@endsection
