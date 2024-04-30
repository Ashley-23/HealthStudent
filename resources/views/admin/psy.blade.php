@extends('base', [
    'title' => 'Liste des psychologues',
])

@section('content')
    <div class="card-body">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrez votre nom ... "
                oninput="this.value = this.value.toUpperCase()" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Entrez votre prénom ... "
                required>
        </div>
        <div class="form-group">
            <label for="dateNaiss">Date de naissance</label>
            <input type="date" name="dateNaiss" class="form-control" id="dateNaiss" required>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Entrez votre email ..."
                required>
        </div>
        <div class="form-group">
            <label for="tel">Téléphone</label>
            <input type="text" name="telephone" class="form-control" id="tel"
                placeholder="Entrez votre numéro de téléphone ..." required pattern="[0-9]{0,10}" maxlength="10">
        </div>

        <div class="form-group">
            <label for="mdp1"> Mot de passe </label>
            <input type="password" name="password" class="form-control" id="mdp1"
                placeholder="Entrez votre mot de passe ..." required>
        </div>
        <div class="form-group">
            <label for="mdp2"> Confirmez le mot de passe </label>
            <input type="password" name="password_confirmation" class="form-control" id="mdp2"
                placeholder="Confirmez votre mot de passe ..." required>
            <span id="error-msg" style="color: red;"></span>
        </div>

    </div>
    <div class="card-footer">
        <button type="button" id="validateButton" class="btn btn-primary">Valider</button>
        <!-- <button type="submit" onclick="validateForm()" class="btn btn-primary">Valider</button> -->
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </div>
@endsection
