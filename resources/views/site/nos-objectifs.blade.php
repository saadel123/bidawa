@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding: 0px; margin: 0px;">
                <img src="img/slide bidawa.png?<?php echo date('YmdHis'); ?>" width="100%" />
            </div>
        </div>
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
