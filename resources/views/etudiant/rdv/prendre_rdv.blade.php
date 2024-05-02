@extends('base', [
    'title' => 'Prendre rendez-vous',
])
{{--  dd($psychologues); --}}
@section('content')
    <div class="card-body">
        <form action="{{  route('rdvs.store') }}" method="POST">
            @csrf
            <input type="hidden" name="psychologue_id" value="{{ $psy->id }}">
            {{-- {{ dd('oups', $psy, $psy->nom) }} --}}
            <div class="">
                <label for="nom">Psychologue :</label>
                <input type="text" id="nom" name="nom" class="form-control"
                    value="{{ $psy->nom }}  {{ $psy->prenom }}" disabled>
            </div>

            <div class="">
                <label for="date">Choisir la date :</label>
                <input type="date" id="date" name="date" class="form-control" required value="{{ old('date', today()) }}>"
                    onchange="getAvailableHours(this.value);">
            </div>

            <div class="">
                <label for="choix">Choisir l'heure :</label>
                <select id="choix" name="choix" class="form-control">
                    <option value>Choisissez une date pour en charger les heure de disponibilité</option>
                </select>
            </div>


            <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-success">Valider</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
            </div>

        </form>
    </div>
@endsection

@section('scripts')
    <script>
        const url = "{{ route('etudiant.rdv.get-available-hours') }}";
        const psyId = "{{ $psy->id }}";
        let choiceSelect = document.getElementById('choix');

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        function getAvailableHours(date) {
            Array.from(choiceSelect.options).forEach(element => element.remove());
            $.post(url, {
                psyId: psyId,
                date: date,
                _token: document.getElementsByName('_token')[0].value
            }).then(response => {
                const respnseData = response.data;
                Toast.fire({
                    icon: 'success',
                    title: 'Données chargée avec succès, ' + respnseData.length + ' Éléments trouvés!'
                });

                
                respnseData.forEach(element => {
                    let newOption = document.createElement('option');
                    newOption.setAttribute('value', element);
                    newOption.innerText = element + 'h à ' + (Number(element) + 1) + 'h';
                    choiceSelect.add(newOption);
                });
            }).catch((error) => {
                Toast.fire({
                    icon: 'error',
                    title: error
                })
                console.log(error);
            });
        }
    </script>
@endsection
