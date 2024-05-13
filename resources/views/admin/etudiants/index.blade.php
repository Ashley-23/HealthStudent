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
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Prenom </th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                @foreach ($etudiants as $key=>$etudiant)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->email }}</td>
                         <td>

                            <div class="modal fade" id="modal-danger{{ $etudiant->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-danger">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Attention !!!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Voulez-vous vraiment supprimer le psychologue {{ $etudiant->nom }}
                                                {{ $etudiant->prenom }} ? &hellip;</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light"
                                                data-dismiss="modal">Fermer</button>

                                            <form action="{{ route('admin.etudiants.destroy', $etudiant->id) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-light">Supprimer</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <button type="submit" class="btn btn-primary" style= "margin-bottom: 10px;" >
                        
                            <a href="{{ route('admin.etudiants.edit', $etudiant->id) }}" class="btn btn-primary">Modifier</a>
                            </button>
                            {{-- <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Modifier</a> --}}
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#modal-danger{{ $etudiant->id }}">
                                Supprimer
                            </button>

                        </td> 
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
