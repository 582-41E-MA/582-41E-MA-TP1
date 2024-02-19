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
                  <input type="number" id="itemQuantity" class="form-control" value="1" min="1">
               </div>
               <a href="../ajoutPanier/{{$liv[0]["id"]}}"><button type="button" class="btn btn-primary">Ajouter au panier</button></a>
         </div>
      </div>
   </div>


@endsection

