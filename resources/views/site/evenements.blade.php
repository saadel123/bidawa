@extends('layouts.app')
@section('title','Activités Bidawa+ Casablanca : Célébrons la Diversité, Construisons l\'Avenir!')
@section('description', 'Découvrez les Activités spéciales de Bidawa+ à Casablanca. Ensemble, valorisons la diversité pour un avenir dynamique! Joignez-vous à nous.')

@section('content')
<style>
    .cont-img {
        display: flex;
        background-color: rgb(221 221 221);
        border-radius: 30px;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
        padding: 3px;
    }
    .cont-img img {
        max-height: 400px;
    }
</style>
    <div class="container bg-white">
        <h1 class="invisible">Activités Bidawa+ Casablanca : Célébrons la Diversité, Construisons l'Avenir!'</h1>
        @include('layouts.slidepage')
        @if ($prochaine_evenment->count()>0)
        <div class="row mt-4">
            <h2>{{__('evenements.prochaine-activite')}}</h2>
            @foreach ($prochaine_evenment as $item)
                <div class="col-md-4 col-6">
                    <a href="activite/{{ $item->{'slug_'.app()->getLocale()} }}" class="m-2 cont-img">
                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="#">
                    </a>
                </div>
            @endforeach
        </div>
        @endif
        <div class="row mt-5">
            <h2>{{__('evenements.activite-precedent')}}</h2>
            @foreach ($evenements as $item)
                <div class="col-md-4 col-6 mt-4">
                    <a href="activite/{{ $item->{'slug_'.app()->getLocale()} }}" class="m-2 cont-img">
                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="#">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
