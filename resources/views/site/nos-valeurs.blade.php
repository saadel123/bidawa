@extends('layouts.app')
@section('title','Nos valeurs')
@section('description',"Les membres de Bidawa sont des femmes et des hommes vivant à Dar Beida, qui partagent les valeurs suivantes.")
@section('content')
<div class="container">
	@include('layouts.slidepage')
	<div class="row bg-white" style="margin-top: 25px;">
		<div class="col-md-12">
			<h2 class="" style="margin-top: 30px;margin-bottom: 30px;"> {{__('qui-sommes-nous.nos-valeurs.title')}}  </h2>
			<div class="row">
				
				<div class="col-md-12">
                    {!!__('qui-sommes-nous.nos-valeurs.description')!!}    
                </div>
			</div>
		</div>
	</div>
</div>	
@endsection



