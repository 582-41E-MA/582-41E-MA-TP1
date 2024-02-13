<!-- copie du index.html -->
@extends('master')
<!-- pour le titre dynamique (au lei de section/endesction, definir variable string direct-->
@section('title', 'List')

@section('content')
<div>

ici il y aura la list genere dynamiquement pour afficher la liste des produits
</div>
<!-- Experience Card 1-->
<a href="show" class="text-decoration-none text-reset">
    <div class="card shadow border-0 rounded-4 mb-5">
        <div class="card-body p-5">
            <div class="row align-items-center gx-5">
                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                    <div class="bg-light p-4 rounded-4">
                        <div class="text-primary fw-bolder mb-2">2019 - Present</div>
                        <div class="small fw-bolder">Web Developer</div>
                        <div class="small text-muted">Stark Industries</div>
                        <div class="small text-muted">Los Angeles, CA</div>
                    </div>
                </div>
                <div class="col-lg-8"><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus laudantium, voluptatem quis repellendus eaque sit animi illo ipsam amet officiis corporis sed aliquam non voluptate corrupti excepturi maxime porro fuga.</div></div>
            </div>
        </div>
    </div>
</a>
@endsection

