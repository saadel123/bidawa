@extends('layouts.app')

@section('content')
    <style>
        .cont-video {
            background-color: rgb(221 221 221);
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 20px;
        }

        .cont-video i {
            color: red;
            font-size: 170px;
        }

        .cont-affiche {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(221 221 221 / 42%);
            border-radius: 30px;
            padding: 12px;
            width: 75%;
            /* border: 2px solid #176fc8; */
        }

        .cont-slide {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cont-slide img {
            max-height: 500px;
        }

        .cont-affiche img {
            max-height: 400px;
        }

        .cont-input .btn {
            display: flex;
            justify-content: space-around;
            margin-left: 70px;
            margin-top: 15px;
            background-color: #176fc8;
            color: white;
            padding: 10px;
            border-radius: 30px !important;
        }

        .cont-input img {
            height: 25px;
        }

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
        <h1 class="invisible">Détails d'activité</h1>
        <div class="row">
            <div class="col-md-12 cont-slide" style="padding: 0px; margin: 0px;">
                @if ($evenement->affiche)
                    <img src="{{ asset('storage/' . $evenement->affiche) }}" class="img-fluid" />
                @else
                    <img src="{{ asset('img/slide bidawa.png') }}" class="img-fluid" />
                @endif
            </div>
        </div>
        <div class="row" style="margin-top: 70px;margin-bottom: 70px">
            <div class="col-md-6 d-flex">
                <div class="cont-affiche">
                    <img src="{{ asset('storage/' . $evenement->image) }}" class="img-fluid" />
                </div>
                @if ($evenement->date > now()->endOfDay())
                    <div class="cont-input">
                        <a href="{{ url('/contact') }}" class="btn">
                            <img src="{{ asset('assets/img/main.png') }}" alt="">
                            &nbsp;&nbsp;<span>Participez</span>
                        </a>
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                <div class="cont-info">

                    <h1 class="card-title mt-4" style="color: #e73325;font-size:25px;">
                        {{$evenement->title}}
                    </h1>
                    <p class="card-text mt-3">
                        {{$evenement->description}}
                    </p>
                    <p class="card-text">
                        <i class="bi bi-geo-alt-fill"></i> {{ $evenement->lieu }}
                    </p>
                    <p class="card-text">
                        <i class="bi bi-calendar"></i> {{ $evenement->date }}
                    </p>

                </div>
            </div>
        </div>
        @if ($evenement->media->count() > 0)
            <div class="row mt-4">
                <h2>{{ __('evenements.photo') }}</h2>
                @foreach ($evenement->media as $item)
                    <div class="col-lg-4 col-md-6 mt-4">
                        <a href="{{ asset('storage/' . $item->url) }}" data-gallery="portfolio-gallery"
                            class="glightbox cont-img">
                            <img src="{{ asset('storage/' . $item->url) }}" class="img-fluid" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
        @if (!empty($evenement->videos) && $evenement->videos !== 'null')
            <div class="row mt-5">
                <h2>{{ __('evenements.video') }}</h2>
                @foreach (explode(',', $evenement->videos) as $item)
                    <div class="col-lg-4 col-md-6 mt-4">
                        <a href="{{ trim($item, '"') }}" data-gallery="portfolio-gallery" class="glightbox cont-video">
                            <i class="bi bi-play-fill"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
