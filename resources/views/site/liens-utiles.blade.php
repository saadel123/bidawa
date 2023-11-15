@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row" >
		<div class="col-md-12" style="padding: 0px; margin: 0px;">
			<img src="img/slide bidawa.png?<?php echo date('YmdHis'); ?>" width="100%"/>
		</div>
	</div>
	<div class="row bg-white" style="margin-top: 25px;">
		<div class="col-md-12">
			<h2 class="" style="margin-top: 30px;margin-bottom: 30px;"> {{__('dar-beida.liens-utiles.title')}} </h2>
			<div class="row">
				<div class="col-md-12">
                   <ul>                     
                    <li> <a href=" http://www.casablancacity.ma/"> http://www.casablancacity.ma</a>	 </li>
                    <li> <a href="http://www.casamemoire.org/"> http://www.casamemoire.org</a>	 </li>
                    <li> <a href="https://wecasablanca.com/accueil"> https://wecasablanca.com/accueil</a>	 </li>                      
                    </ul> 
                </div>
			</div>
		</div>
	</div>	
</div>	
@endsection
