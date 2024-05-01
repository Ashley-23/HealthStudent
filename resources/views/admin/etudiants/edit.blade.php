@extends('base', [
    'title' => 'Modifier un etudiant',
])

@section('content')
    <div class="card-body">
        <form action="{{ route('admin.etudiants.update') }}" method="post" >
            @csrf
            <!-- @method('post') -->
            <input type="hidden" name="id" value="{{ $etudiant->id }}"/>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control text-capitalize" id="nom" placeholder="Entrez le nom du psychologue ... "
                    value="{{ $etudiant->nom }}" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="prenom" value="{{ $etudiant->prenom }}"
                    placeholder="Entrez le prénom du psychologue ... " required>
            </div>
            <div class="form-group">
                <label for="dateNaiss">Date de naissance</label>
                <input type="date" name="dateNaiss" value="{{ $etudiant->dateNaiss }}" class="form-control" id="dateNaiss" max="2013-12-31" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $etudiant->email }}"
                    placeholder="Entrez l'email nom du psychologue  ..." required>
            </div>
            <div class="form-group">
                <label for="tel">Téléphone</label>
                <input type="text" name="tel" class="form-control" id="tel" value="{{ $etudiant->tel }}"
                    placeholder="Entrez le numéro de téléphone du psychologue  ..." required pattern="[0-9]{0,10}" maxlength="10">
            </div>

            <div class="form-group">
                <label for="mdp1"> Numéro étudiant </label>
                <input type="text" name="num_etu" class="form-control" id="num_etu" value="{{ $etudiant->num_etu }}"
                    placeholder="Entrez votre numéro de l'etudiant ..." pattern="[a-zA-Z0-9]+"
                    title="Veuillez entrer uniquement des chiffres et des lettres." required>
            </div>
            <div class="form-group">
                <label for="mdp2"> Année d'entrée </label>
                <input type="c" name="annee_entree" class="form-control" id="annee_entree" required value="{{ $etudiant->annee_entree }}">
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Valider</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
            </div>

        </form>
    </div>
@endsection
