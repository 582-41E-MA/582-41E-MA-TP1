<!-- copie du index.html -->
@extends('master')
<!-- pour le titre dynamique (au lei de section/endesction, definir variable string direct-->
@section('title', 'Pay')

@section('content')
   <div>
    <h3>{{ $sum }} CAD à payer</h3>
   </div>
@endsection

