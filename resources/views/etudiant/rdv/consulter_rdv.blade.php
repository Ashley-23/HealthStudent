@extends('base', [
    'title' => 'Consulter mes rendez-vous'
])
{{-- <?php dd($etudiants[0]->psychologue->nom) --}}
@section('content')
    <div class="card-body pad table-responsive">
        @if ($etudiants->isNotEmpty())
            <table class="table table-bordered text-center">
                <tr>

                    <th>Psychologue </th>
                    <th>Date </th>
                    <th>Heure </th>
                    <th>Commentaire </th>
                </tr>
                {{-- dd($etudiants, $etudiants[0]->psychologue) --}}
                @foreach ($etudiants as $rdv)
                    <tr>
                        <td> {{ $rdv->psychologue->nom }} {{ $rdv->psychologue->prenom }}</td>
                        <td>  {{ $rdv->date }}</td>
                        <td>  {{ $rdv->heure_debut }}H  -   {{ $rdv->heure_fin }}H</td>
                        <td>  {{ $rdv->comentaire }}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <div class="alert alert-warning alert-dismissible">
                {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
                <h5><i class='icon fas fa-exclamation-triangle'></i> Oups!</h5>
               Aucun  rendez-vous pour le moment.
            </div>
        @endif
    </div>
@endsection
