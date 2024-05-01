@extends('base', [
    'title' => ' Prendre rendez-vous',
])
{{--  dd($psychologues); --}}
@section('content')

    <div class="card-body">
        {{-- <form action="prendre_rdv.blade.php" method="POST"> --}}
        <form action="#" method="POST">
            @method('post')
            @csrf

            {{-- <div class="">
                <label for="choix">Choisir mon psychologue :</label>
                <select id="choix" name="choix" class="form-control" >

                    @foreach($psychologues as $psy)

                        <option value="{{ $psy->nom }}">{{ $psy->nom }}</option>
                    @endforeach

                </select>
            </div> --}}

            <div class="">
                <label for="nom"> Psychologue :</label>
                <input type = "text" id="nom" name="nom" class="form-control" value="{{ $psy[0]->nom }}  {{ $psy[0]->prenom }}" disabled>
            </div>

            <div class="">
                <label for="date">Choisir la date :</label>
                <input type = "date" id="date" name="date" class="form-control" required min="<?php echo date('Y-m-d'); ?>">
            </div>

             <div class="">

                 <label for="heure">Choisir l'heure :</label>
                 <select id="choix" name="choix" class="form-control" >

                     @for($i = 9; $i < 16; $i++)

                         @if($i != 12 or $i !=13 or $i !=14 )
                             <option value="heure">{{ $i }} : 00</option>
                         @endif
                     @endfor

                 </select>
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
