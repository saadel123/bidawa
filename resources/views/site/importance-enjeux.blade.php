@extends('layouts.app')
@section('title','Importance et Enjeux')
@section('description','Découvrez Casablanca, la mégalopole marocaine : taille, population, poids économique, potentiel unique. Une expérience où grandeur et défis se croisent, façonnant un paysage urbain vibrant.')
@section('content')
    <div class="container">
        @include('layouts.slidepage')
        <div class="row bg-white" style="margin-top: 25px;">
            <div class="col-md-12">
                <h2 class="" style="margin-top: 30px;margin-bottom: 30px;"> {{__('dar-beida.importance-enjeux.title')}} </h2>
                <div class="row color-secondary">
                    <div class="col-md-12">
                        {!!__('dar-beida.importance-enjeux.description')!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
