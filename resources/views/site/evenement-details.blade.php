@extends('layouts.app')
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

    .cont-img {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cont-affiche {
        display: flex;
        height: 400px;
    }

    .cont-img img {
        height: 250px;
        max-width: 100%;
        border-radius: 20px;
    }
</style>
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-12" style="padding: 0px; margin: 0px;">
                <img src="{{ asset('storage/' . $evenement->affiche) }}" height="400px" width="100%" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-4 cont-affiche">
                <img src="{{ asset('storage/' . $evenement->image) }}" class="img-fluid" />
            </div>
        </div>
        <div class="row mt-4">
            <h2>{{__('evenements.photo')}}</h2>
            @foreach ($evenement->media as $item)
                <div class="col-lg-4 col-md-6 mt-4">
                    <a href="{{ asset('storage/' . $item->url) }}" data-gallery="portfolio-gallery"
                        class="glightbox cont-img">
                        <img src="{{ asset('storage/' . $item->url) }}" class="img-fluid" alt="">
                    </a>
                </div>
            @endforeach
        </div>
        @if (!empty($evenement->videos) && $evenement->videos !== 'null')
            <div class="row mt-5">
                <h2>{{__('evenements.video')}}</h2>
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
