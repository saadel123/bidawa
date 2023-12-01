@extends("layouts.app")
@section('title','Notre Vision')
@section('description',"Découvrez une Casablanca en plein essor, conciliant croissance démographique et urbanistique avec un cadre de vie convivial pour les Bidawa. Une ville équilibrée, alliant dimensions matérielles, économiques et humaines. Notre mission : faire de Casablanca une ville où il fait bon vivre, décente, paisible, stimulante et épanouissante, répondant aux exigences sociales, sécuritaires et culturelles.")

@section("content")
<div class="container">
    @include('layouts.slidepage')
    <div class="row bg-white" style="margin-top: 25px;">
        <div class="col-md-12">
            <h2 class="" style="margin-top: 30px;margin-bottom: 30px;"> {{__('qui-sommes-nous.notre-vision.title')}} </h2>
            <p>
                {!!__('qui-sommes-nous.notre-vision.description')!!}
            </p>
        </div>
    </div>
</div>
@endsection
