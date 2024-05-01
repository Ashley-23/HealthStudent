 @extends('base', [
    'title' => 'LISTE DES PSYCHOLOGUES',
])

@section('content')

<div class="card-body pad table-responsive">
        @if ($psychologues->isNotEmpty())
            <table class="table table-bordered text-center">
                <tr>
                    <th class="bg-primary text-white">Date de rendez-vous</th>
                    <th class="bg-primary text-white">psychologue</th>
                    <th class="bg-primary text-white">Commentaire</th>
                </tr>
                
                {{-- dd($rdv);--}}
                
                @foreach ($rdv as $mrdv) 
                
                     <tr>
                        <td>{{ $mrdv->date }}</td>
                        <td>{{ $mrdv->psychologue->nom }}  {{ $mrdv->psychologue->prenom }}</td> 
                        <td>

                        <div class="modal fade" id="modal-primary{{ $mrdv->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content bg-primary">
                                    <div class="modal-header">
                                    <h4 class="modal-title">Commentaire</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                <div class="modal-body">
                                <p>
                                    {{ $mrdv->comentaire}}
                                </p>
                                </div>
                                <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                         </div>
                            <!-- /.modal-dialog -->
                        </div>

                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary{{ $mrdv->id}}">
                                Affichez commentaire    
                            </button>
                        </td>
                     </tr>
              
                @endforeach
              
        
            </table>
            
            
        @else
		<div class="alert alert-warning alert-dismissible">
			{{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
			<h5><i class='icon fas fa-exclamation-triangle'></i> Oups!</h5>
			Aun psychologue n'a été trouvé dans la base de données
		</div>
        @endif
        
        <!-- <button type="button" class="btn btn-primary ml-0 mt-500">Votre texte de bouton</button> -->
        
    </div>


@endsection 

 