@extends('layouts.app')
@section('title', 'Vivre et Agir à Casablanca : Bidawa+ Association pour une Ville Meilleure')
@section('description', 'Casablanca, Dar Beida : Ville généreuse et accueillante. Bidawa+ valorise la diversité pour un Casablanca meilleur. Rejoignez-nous pour l\'améliorer!')
@section('content')

    <div class="container">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide d-flex align-items-center" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($slides as $key => $item)
                        @php
                            $activeClass = $key == 0 ? 'active' : '';
                        @endphp
                        <a href="{{$item->url}}" class="carousel-item {{ $activeClass }}">
                            <img src="{{asset('storage/'.$item->image)}}" class="d-block w-100" alt="...">
                        </a>
                    @endforeach

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"  style="background-color: #80808047;" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"  style="background-color: #80808047;" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
     <h1 style="display: none">Vivre et Agir à Casablanca : Bidawa+ Association pour une Ville Meilleure</h1>
        <div class="row bg-white" style="margin-top: 25px;">
            <div class="col-md-12">
                <h2 class="" style="margin-top: 30px;margin-bottom: 30px;">
                    {{ __('accueil.titre_mot_de_la_presidente') }} </h2>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-12 d-flex align-items-center justify-content-center">
                        <img class="pull-left" style="width:270px;margin-right: 41px;"
                            src="img/raja-aghzadi.jpg?<?php echo date('YmdHis'); ?>" width="100%" />
                    </div>
                    <div class="col-md-6 col-12 ">
                        {!! __('accueil.mot_de_la_presidente') !!}
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-white" style="margin-top: 25px;padding-bottom: 25px;">

            <div class="col-md-12" id="actualite">

                <h2 class="" style="margin-top: 30px;margin-bottom: 30px;">{{ __('accueil.activites') }}</h2>

            </div>
            <div class="col-md-12" style="margin-bottom:95px">
                <img src="img/{{ __('accueil.affiche') }}?<?php echo date('YmdHis'); ?>" width="100%"
                    style="border: 1px solid #a6a6a6;padding-bottom: 53px;" />
            </div>
            <div class="col-md-12" style="margin-bottom:95px">
                <img src="img/{{ __('accueil.affiche2') }}?<?php echo date('YmdHis'); ?>" width="100%"
                    style="border: 1px solid #a6a6a6;padding-bottom: 53px;" />
            </div>
            <div class="col-md-6">
                <img src="img/bidawa-img.png?<?php echo date('YmdHis'); ?>" width="100%" />
                <p style="margin-top: 20px;">
                    {{ __('accueil.description1') }}
                </p>
            </div>
            <div class="col-md-6" style="height: 100%;">
                <p>{{ __('accueil.description2') }}</p>
            </div>
            <div class="col-md-12">
                <a href="/contact">
                    <img class="img-envoyer" src="img/icone-envoyer.png?<?php echo date('YmdHis'); ?>" style="width: 300px;" />
                </a>
            </div>
        </div>
        <div class="row " style="margin-top: 25px;padding:0px!important">
            <img src="img/sponsor-bidawa.png?<?php echo date('YmdHis'); ?>" style="width:100%;height:auto;" />
            <img src="img/sponsor-bidawa-2.png?<?php echo date('YmdHis'); ?>" style="width:100%;height:auto;" />
            <img src="img/sponsor-bidawa-3.png?<?php echo date('YmdHis'); ?>" style="width:100%;height:auto;" />
            <img src="img/sponsor-bidawa-4.png?<?php echo date('YmdHis'); ?>" style="width:100%;height:auto;" />
            <img src="img/sponsor-bidawa-5.png?<?php echo date('YmdHis'); ?>" style="width:100%;height:auto;" />
        </div>
    </div>
@endsection
