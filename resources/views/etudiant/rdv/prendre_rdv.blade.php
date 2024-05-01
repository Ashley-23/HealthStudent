@extends('base', [
    'title' => ' Prendre rendez-vous',
])
{{--  dd($psychologues); --}}
@section('content')

    <div class="card-body">
        <form action="prendre_rdv.blade.php" method="POST">
            @method('post')
            @csrf
            <div class="">
                <label for="choix">Choisir mon psychologue :</label>
                <select id="choix" name="choix" class="form-control" >

                    @foreach($psychologues as $psy)

                        <option value="{{ $psy->nom }}">{{ $psy->nom }}</option>
                    @endforeach

                </select>
            </div>
            <div class="">
                <label for="date">Choisir mon une date :</label>
                <input type = "date" id="date" name="date" class="form-control" required>
            </div>
             <div class="">

                 <label for="heure">Choisir mon une date :</label>
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
