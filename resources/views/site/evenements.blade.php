@extends('layouts.app')
<style>
    .cont-img {
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .cont-img img {
        height: 270px;
        max-width: 100%;
        border-radius: 20px;
    }
</style>
@section('content')
    <div class="container bg-white">
        <div class="row">
            <div class="col-md-12" style="padding: 0px; margin: 0px;">
                <img src="img/slide bidawa.png" width="100%" />
            </div>
        </div>
        <div class="row mt-4">
            <h2>{{__('evenements.prochaine-activite')}}</h2>
            @foreach ($prochaine_evenment as $item)
                <div class="col-md-4 col-6">
                    <div class="m-2 cont-img">
                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="#">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <h2>{{__('evenements.activite-precedent')}}</h2>
            @foreach ($evenements as $item)
                <div class="col-md-4 col-6">
                    <a href="evenements/{{ $item->slug }}" class="m-2 cont-img">
                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="#">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
