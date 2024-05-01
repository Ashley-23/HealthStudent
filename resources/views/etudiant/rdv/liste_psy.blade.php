 @extends('base', [
    'title' => 'LISTE DES PSYCHOLOGUES',
])

@section('content')

<div class="card-body pad table-responsive">
        @if ($psychologues->isNotEmpty())
            <table class="table table-bordered text-center">
                <tr>
                    <th class="bg-primary text-white">psychologue</th>
                    <th class="bg-primary text-white"></th>
                </tr>
                
                {{-- dd($rdv);--}}
                
                @foreach ($psychologues as $psychologues) 
                
                     <tr>
                        {{-- <td>{{ $mrdv->date }}</td> --}}
                        <td>{{ $psychologues->nom }}  {{$psychologues->prenom }}</td> 
                        <td>


                            <a href="{{ route('etudiant.rdv.prendre_rdv', $psychologues->id) }}" class="btn btn-primary">Prendre un rendez-vous</a>
                        </td>
                     </tr>
              
                @endforeach
              
        
            </table>
            
            
        @else
		<div class="alert alert-warning alert-dismissible">
			{{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
			<h5><i class='icon fas fa-exclamation-triangle'></i> Oups!</h5>
			Aucun psychologue n'a été trouvé dans la base de données
		</div>
        @endif
        
        <!-- <button type="button" class="btn btn-primary ml-0 mt-500">Votre texte de bouton</button> -->
        
    </div>


@endsection 

 