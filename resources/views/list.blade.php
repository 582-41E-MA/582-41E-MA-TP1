<!-- copie du index.html -->
@extends('master')
<!-- pour le titre dynamique (au lei de section/endesction, definir variable string direct-->
@section('title', 'List')

@section('hero')
<div class="hero">
<div class="container-fluid d-flex align-items-center">
  <div class="row justify-content-center w-100">
    <div class="col">
      <div class="p-3 border text-white"><h1>The Cat Store</h1></div>
    </div>
    <div class="col">
      <div class="p-3 border img-fluid"><img src="{{ asset('images/catstorelogo.jpg') }}" alt="cat logo" class="cat-logo"></div>
    </div>
    <div class="col">
      <div class="p-3 border text-white">Attack curtains poop in litter box, scratch the
walls for kitty slap the dog because cats rule lick
yarn hanging out of own butt but why can't i catch that
stupid red dot leave fur on owners clothes.</div>
    </div>
  </div>
</div>
</div>
@endsection
@section('content')






<!-- Experience Card 1-->
<a href="show" class="text-decoration-none text-reset">
  <div class="card shadow border-0 rounded-4 my-3 mx-5">
    <div class="card-body p-5">
      <div class="row align-items-center gx-5">
        <div class="col text-center bg-light p-4 rounded-4  text-lg-start mb-4 mb-lg-0 content-wrapper">
          <div class="image-wrapper">
            <img src="{{ asset('images/catstorelogo.jpg') }}" alt="" style="width:150px;">
          </div>
          <div>
            <p>Nom du chat</p>
          </div>
        </div>
        <div class="col-lg-8">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-end">
          <button class="btn btn-primary">Ajouter au Panier</button>
        </div>
      </div>
    </div>
  </div>
</a>



<!-- Experience Card 2-->
<a href="show" class="text-decoration-none text-reset">
  <div class="card shadow border-0 rounded-4 my-3 mx-5">
    <div class="card-body p-5">
      <div class="row align-items-center gx-5">
        <div class="col text-center bg-light p-4 rounded-4  text-lg-start mb-4 mb-lg-0 content-wrapper">
          <div class="image-wrapper">
            <img src="{{ asset('images/catstorelogo.jpg') }}" alt="" style="width:150px;">
          </div>
          <div>
            <p>Nom du chat 2</p>
          </div>
        </div>
        <div class="col-lg-8">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex justify-content-end">
          <button class="btn btn-primary">Ajouter au Panier</button>
        </div>
      </div>
    </div>
  </div>
</a>
@endsection

