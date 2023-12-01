@extends('layouts.app')
@section('title','Nos objectifs')
@section('description',"Favorisons les rencontres et les échanges entre les Casablancais, œuvrant ensemble pour améliorer le cadre de vie dans leur ville. Une plateforme dédiée à l'unité et à l'amélioration collective.")
@section('content')
    <div class="container">
        @include('layouts.slidepage')
        <div class="row bg-white" style="margin-top: 25px;">
            <div class="col-md-12">
                <h2 class="" style="margin-top: 30px;margin-bottom: 30px;"> {{__('qui-sommes-nous.nos-objectifs.title')}} </h2>
                <div class="row">

                    <div class="col-md-12">
                        <ul>
                            {!!__('qui-sommes-nous.nos-objectifs.description')!!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
