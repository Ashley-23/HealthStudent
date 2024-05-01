@extends('base', [
    'title' => ' Mes informations',
])

@section('content')

<div class="card-body">
        <form action="#" method="POST">
            {{-- dd('jy suis', $etudiants[0]->nom); --}}
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input value="{{ $etudiants[0]->nom }}" type="text" name="nom" class="form-control" id="nom" placeholder="Entrez votre nom ... "
                    oninput="this.value = this.value.toUpperCase()" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input value = "{{$etudiants[0]->prenom}}" type="text" name="prenom" class="form-control" id="prenom"
                    placeholder="Entrez votre prénom ... " required>
            </div>
            <div class="form-group">
                <label for="dateNaiss">Date de naissance</label>
                <input  value = "{{$etudiants[0]->dateNaiss}}" type="date" name="dateNaiss" class="form-control" id="dateNaiss" max="2013-12-31" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input  value = "{{$etudiants[0]->email}}" type="email" name="email" class="form-control" id="email"
                    placeholder="Entrez votre email ..." required>
            </div>
            <div class="form-group">
                <label for="tel">Téléphone</label>
                <input value = "{{$etudiants[0]->tel}}" type="text" name="tel" class="form-control" id="tel"
                    placeholder="Entrez votre numéro de téléphone ..." required pattern="[0-9]{0,10}" maxlength="10">
            </div>

            <div class="form-group">
                <label for="mdp1"> Numéro d'étudiant </label>
                <input value = "{{$etudiants[0]->num_etu}}" type="text" name="num_etu" class="form-control" id="num_etu"
                    placeholder="Entrez votre numéro d'étudiant ..." pattern="[a-zA-Z0-9]+"
                    title="Veuillez entrer uniquement des chiffres et des lettres." required>
            </div>
            <div class="form-group">
                <label for="mdp2"> Année d'entrée </label>
                <input value = "{{$etudiants[0]->annee_entree}}"  type="$etudiants" name="annee_entree" class="form-control" id="annee_entree" required>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-success">Valider</button>
                <!-- <button type="submit" onclick="validateForm()" class="btn btn-primary">Valider</button> -->
                <button type="reset" class="btn btn-danger">Annuler</button>
            </div>

        </form>
    </div>

@endsection
