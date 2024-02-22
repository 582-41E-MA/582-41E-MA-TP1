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
               <h2 class="mb-3">{{$livre->titre}}</h2>
               <p class="mb-4">{{$livre->description}}</p>
               <h4 class="mb-2">Prix: ${{$livre->prix}}</h4>
               <form method="POST" action="{{ route('panier.ajouter', $livre->id) }}">
                  @csrf
                  <div class="mb-3">
                     <label for="itemQuantity" class="form-label">Quantité:</label>
                     <input name="panier" type="number" id="itemQuantity" class="form-control" value="0" min="0" max='{{$livre->quantite}}'>
                  </div>
                  {{-- si la quantité disponible est plus que 0, on permet d'ajouter au panier; sinon, on affiche l'info --}}
                  @if ( $livre->quantite > 0 )
                  <button type="submit" class="btn btn-primary">Ajouter au panier</button>
                  @else
                  <button class="btn btn-info" disabled>pas disponible maintenant</button>
                  @endif
               </form>
         </div>
      </div>
   </div>


@endsection

