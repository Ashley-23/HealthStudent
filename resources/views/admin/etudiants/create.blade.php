@extends('admin.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Ajouter des étudiants </h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.etudiants.store') }}" method="POST">
                                {{-- <form id="quickForm" > --}}
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" name="nom" class="form-control" id="nom"
                                            placeholder="Entrez votre nom ... "
                                            oninput="this.value = this.value.toUpperCase()" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom">Prenom</label>
                                        <input type="text" name="prenom" class="form-control" id="prenom"
                                            placeholder="Entrez votre prénom ... " required>
                                    </div>
                                    <div class="form-group">
                                        <label for="dateNaiss">Date de naissance</label>
                                        <input type="date" name="dateNaiss" class="form-control" id="dateNaiss"
                                            max="2013-12-31" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Entrez votre email ..." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tel">Téléphone</label>
                                        <input type="text" name="tel" class="form-control" id="tel"
                                            placeholder="Entrez votre numéro de téléphone ..." required
                                            pattern="[0-9]{0,10}" maxlength="10">
                                    </div>

                                    <div class="form-group">
                                        <label for="mdp1"> Numéro d'étudiant </label>
                                        <input type="text" name="num_etu" class="form-control" id="num_etu"
                                            placeholder="Entrez votre numéro d'étudiant ..." pattern="[a-zA-Z0-9]+"
                                            title="Veuillez entrer uniquement des chiffres et des lettres." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="mdp2"> Année d'entrée </label>
                                        <input type="date" name="annee_entree" class="form-control" id="annee_entree"
                                            required>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button class="btn btn-primary">Valider</button>
                                    <!-- <button type="submit" onclick="validateForm()" class="btn btn-primary">Valider</button> -->
                                    <button type="reset" class="btn btn-secondary">Annuler</button>
                                </div>

                            </form>
                        </div>





                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
