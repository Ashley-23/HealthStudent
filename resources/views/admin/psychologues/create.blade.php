@extends('base', [
    'title' => 'Créer psychologue',
])

@section('content')
    <div class="card-body">
        <form action="{{ route('admin.psychologues.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" class="form-control text-capitalize" id="nom" placeholder="Entrez votre nom ... "
                    value="{{  old('nom') }}" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="prenom" value="{{  old('prenom') }}"
                    placeholder="Entrez votre prénom ... " required>
            </div>
            <div class="form-group">
                <label for="dateNaiss">Date de naissance</label>
                <input type="date" name="dateNaiss" value="{{  old('dateNaiss') }}" class="form-control" id="dateNaiss" max="2013-12-31" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{  old('email') }}"
                    placeholder="Entrez votre email ..." required>
            </div>
            <div class="form-group">
                <label for="tel">Téléphone</label>
                <input type="text" name="tel" class="form-control" id="tel" value="{{  old('tel') }}"
                    placeholder="Entrez votre numéro de téléphone ..." required pattern="[0-9]{0,10}" maxlength="10">
            </div>

            <div class="form-group">
                <label for="mdp1"> Numéro du psychologue </label>
                <input type="text" name="num_psy" class="form-control" id="num_psy" value="{{  old('num_psy') }}"
                    placeholder="Entrez votre numéro d'étudiant ..." pattern="[a-zA-Z0-9]+"
                    title="Veuillez entrer uniquement des chiffres et des lettres." required>
            </div>
            <div class="form-group">
                <label for="mdp2"> Année d'entrée </label>
                <input type="date" name="annee_entree" class="form-control" id="annee_entree" required value="{{  old('annee_entree') }}">
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-primary">Valider</button>
                <!-- <button type="submit" onclick="validateForm()" class="btn btn-primary">Valider</button> -->
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>

        </form>
    </div>
@endsection
