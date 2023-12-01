@extends('layouts.app')
@section('title','Patrimoine')
@section('description',"Explorez le patrimoine vivant de Casablanca, métropole avant-gardiste au riche héritage. Bidawa+ rend hommage à cette ville locomotive, lieu d'attractivité, créativité et innovation. Unissez-vous à la solidarité bidawa pour préserver la mémoire collective. Découvrez l'histoire des lieux emblématiques, des bâtiments marquants et des témoignages uniques sur notre site.")

@section('content')
    <div class="container">
        @include('layouts.slidepage')
        <div class="row bg-white" style="margin-top: 25px;">
            <div class="col-md-12">
                <h2 class="" style="margin-top: 30px;margin-bottom: 30px;"> {{__('dar-beida.patrimoine.title')}} </h2>
                <div class="row">
                    <div class="col-md-12">
                        {!!__('dar-beida.patrimoine.description')!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
