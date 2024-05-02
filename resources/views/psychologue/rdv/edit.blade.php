@extends('base', [
    'title' => 'Modifier un rendez-vous',
])

@section('content')
    <div class="card-body">
        <form action="{{ route('rdvs.update', $rdv) }}" method="post" >
            @csrf
            <!-- @method('post') -->
            <input type="hidden" name="id" value="{{ $rdv->id }}"/>
            <div class="form-group">
                <label for="nom">Etudiant</label>
                <input type="text" name="nom" class="form-control text-capitalize" id="nom" placeholder="Entrez le nom du psychologue ... "
                    value="{{ $rdv->etudiant->nom }} {{ $rdv->etudiant->prenom }}" disabled>
            </div>
            <div class="form-group">
                <label for="prenom">Date</label>
                <input type="text" name="prenom" class="form-control" id="prenom" value="{{ $rdv->date }}"
                    placeholder="Entrez le prénom du psychologue ... " disabled>
            </div>
            <div class="form-group">
                <label for="heure">Heure</label>
                <input type="text" name="heure" value="{{ $rdv->heure_debut }}H - {{ $rdv->heure_fin }}H " class="form-control" id="heure" max="2013-12-31" disabled>
            </div>
            <div class="form-group">
                <label for="text">Commentaire</label>
                <input type="text" name="comentaire" class="form-control" id="comentaire" value="{{ $rdv->comentaire }}"
                    placeholder="Entrez le diagnostic ..." required>
            </div>
            

            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Valider</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
            </div>

        </form>
    </div>
@endsection
