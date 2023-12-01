@extends('layouts.app')
@section('title','Notre mission')
@section('description',"Bidawa+ est une association à but non lucratif, créée en janvier 2020 par des Casablancais pour les Casablancais. Notre mission citoyenne vise à renforcer le sens de la responsabilité partagée pour faire de Casablanca une référence en qualité de vie. Nous mobilisons les énergies de la ville pour améliorer notre cadre de vie, de la mobilité à la culture, en passant par l'hygiène et la sécurité. Ensemble, nous répondons concrètement à vos préoccupations quotidiennes.")

@section('content')
    <div class="container">
        @include('layouts.slidepage')
        <div class="row bg-white" style="margin-top: 25px;">
            <div class="col-md-12">
                <h2 class="" style="margin-top: 30px;margin-bottom: 30px;"> {{__('qui-sommes-nous.notre-mission.title')}}</h2>
                <div class="row">

                    <div class="col-md-12">
                        {!!__('qui-sommes-nous.notre-mission.description')!!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
