<!-- copie du index.html -->
@extends('master')
<!-- pour le titre dynamique (au lei de section/endesction, definir variable string direct-->
@section('title', 'Show')

@section('content')

   <div class="container my-5">
      <div class="row">
         <div class="col-md-6">
               <!-- Image placeholder -->
               <img src="{{ asset('images/catstorelogo.jpg') }}" style="width:300px" class="img-fluid" alt="Item Image">
         </div>
         <div class="col-md-6">
               <!-- Item Information -->
               <h2 class="mb-3">{{$liv[0]["titre"]}}</h2>
               <p class="mb-4">{{$liv[0]["description"]}}</p>
               <h4 class="mb-2">Prix: ${{$liv[0]["prix"]}}</h4>
               <div class="mb-3">
                  <label for="itemQuantity" class="form-label">Quantité:</label>
                  <input type="number" id="itemQuantity" class="form-control" value="0" min="0" max='{{$liv[0]["quantite"]}}'>
               </div>
               {{-- si la quantité est plus que 0, on permet d'ajouter au panier; sinon, on affiche l'info --}}
               @if ( $liv[0]["quantite"] > 0 )
               <a class="btn btn-primary" href="../ajoutPanier/{{$liv[0]['id']}}">Ajouter au panier</a>
               @else
               <button class="btn btn-info" disabled>pas disponible maintenant</button>
               @endif
         </div>
      </div>
   </div>


@endsection

