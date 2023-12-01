@extends('layouts.app')
@section('title','Média')
@section('content')
    <div class="container">
		@include('layouts.slidepage')
        <div class="row bg-white" style="margin-top: 25px;padding-bottom: 25px;">
            <div class="col-md-12">
                <div class="row media-img">
					@foreach ($presses as $item)
                    <div class="col-md-4 ">
						<a target="_blank" href="{{$item->url}}">
                            <img src="{{asset('storage/'.$item->image)}}" />
                        </a>
                    </div>
					@endforeach
                </div>
            </div>
        </div>
@endsection
