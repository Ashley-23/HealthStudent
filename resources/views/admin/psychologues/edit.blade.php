@extends('base', [
    'title' => 'Modifier un psychologue',
])

@section('content')
    <div class="card-body">
        <form action="{{ route('admin.psychologues.update', $psychologue->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control text-capitalize" id="nom" placeholder="Entrez le nom du psychologue ... "
                    value="{{ $psychologue->nom }}" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="prenom" value="{{ $psychologue->prenom }}"
                    placeholder="Entrez le prénom du psychologue ... " required>
            </div>
            <div class="form-group">
                <label for="dateNaiss">Date de naissance</label>
                <input type="date" name="dateNaiss" value="{{ $psychologue->dateNaiss }}" class="form-control" id="dateNaiss" max="2013-12-31" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $psychologue->email }}"
                    placeholder="Entrez l'email nom du psychologue  ..." required>
            </div>
            <div class="form-group">
                <label for="tel">Téléphone</label>
                <input type="text" name="tel" class="form-control" id="tel" value="{{ $psychologue->tel }}"
                    placeholder="Entrez le numéro de téléphone du psychologue  ..." required pattern="[0-9]{0,10}" maxlength="10">
            </div>

            <div class="form-group">
                <label for="mdp1"> Numéro du psychologue </label>
                <input type="text" name="num_psy" class="form-control" id="num_psy" value="{{ $psychologue->num_psy }}"
                    placeholder="Entrez votre numéro du psychologue ..." pattern="[a-zA-Z0-9]+"
                    title="Veuillez entrer uniquement des chiffres et des lettres." required>
            </div>
            <div class="form-group">
                <label for="mdp2"> Année d'entrée </label>
                <input type="c" name="annee_entree" class="form-control" id="annee_entree" required value="{{ $psychologue->annee_entree }}">
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>

        </form>
    </div>
@endsection
