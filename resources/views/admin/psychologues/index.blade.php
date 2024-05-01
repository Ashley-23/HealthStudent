@extends('base', [
    'title' => 'Liste des psychologues',
    'breadcrumbs' => ['Administration', 'Liste des psychologues'],
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
                        <td>

                            <div class="modal fade" id="modal-danger{{ $psychologue->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-danger">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Attention !!!</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Voulez-vous vraiment supprimer le psychologue {{ $psychologue->nom }}
                                                {{ $psychologue->prenom }} ? &hellip;</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light"
                                                data-dismiss="modal">Fermer</button>

                                            <form action="{{ route('admin.psychologues.destroy', $psychologue->id) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-light">Supprimer</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="{{ route('admin.psychologues.edit', $psychologue->id) }}"
                                method="post">
                                @csrf
                                <button type="submit" class="btn btn-primary" style= "margin-bottom: 10px;" >Modifier</button>
                            </form>
                            {{-- <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Modifier</a> --}}
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#modal-danger{{ $psychologue->id }}">
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
                Aucun psychologue n'a été trouvé dans la base de données
            </div>
        @endif
    </div>



@endsection
