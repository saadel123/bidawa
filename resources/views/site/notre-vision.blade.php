@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding: 0px; margin: 0px;">
            <img src="img/slide bidawa.png?<?php echo date('YmdHis'); ?>" width="100%" />
        </div>
    </div>
    <div class="row bg-white" style="margin-top: 25px;">
        <div class="col-md-12">
            <h2 class="" style="margin-top: 30px;margin-bottom: 30px;"> {{__('qui-sommes-nous.notre-vision.title')}} </h2>
            <p>
                {!!__('qui-sommes-nous.notre-vision.description')!!}
            </p>
        </div>
    </div>
</div>
@endsection
