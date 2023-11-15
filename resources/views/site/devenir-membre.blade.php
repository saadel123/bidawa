@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding: 0px; margin: 0px;">
                <img src="img/slide-bidawa-4.png?<?php echo date('YmdHis'); ?>" width="100%" />
            </div>
        </div>
        <div class="row bg-white" style="margin-top: 25px;padding-bottom: 80px;">
            <div class="col-md-12">
                <div class="row color-secondary">
                    <div class="col-md-12">
                        <h3 style="color:#00579e;font-weight:bold;"> {{__('partenariat.devenir-membre.title')}} </h3>
                        <p>
                            {{__('partenariat.devenir-membre.description')}}
                        </p>
                    </div>
                    <div class="col-md-12" style="margin-top:30px;">
                        @if (session()->has('success'))
                           <div class="alert alert-success">{{session()->get('success')}}</div> 
                        @endif
                        <div class="row">
                            <form class="form-inline" method="post" style="display: flex;flex-wrap: wrap;" action="{{route('store.member')}}">
                                @csrf
                                <div class="form-group mt-4 col-md-6" >
                                    <label>{{__('partenariat.devenir-membre.civilite')}} * : </label>
                                    <div style="text-align:center;">
                                        <label style="margin-right:60px;"><input type="radio" name="civilite" style="width:20px!important;" value="Mme" checked /> {{__('partenariat.devenir-membre.madame')}}</label>
                                        <label><input type="radio" name="civilite" value="M" style="width:20px!important;" /> {{__('partenariat.devenir-membre.monsieur')}}</label>
                                        @if ($errors->has('civilite'))
                                            <div style="color: red">{{ $errors->first('civilite') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class="" for="nom">{{__('partenariat.devenir-membre.nom')}} *</label>
                                        <input style="width:100%;" type="text" class="form-control mt-2" id="nom" name="nom" required>
                                        @if ($errors->has('nom'))
                                            <div style="color: red">{{ $errors->first('nom') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        <label class="" for="prenom">{{__('partenariat.devenir-membre.prenom')}} *</label>
                                        <input style="width:100%;" type="text" class="form-control mt-2" id="prenom" name="prenom" required>
                                        @if ($errors->has('prenom'))
                                            <div style="color: red">{{ $errors->first('prenom') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class="" for="adresse">{{__('partenariat.devenir-membre.adresse')}} *</label>
                                        <input style="width:100%;" type="text" class="form-control mt-2" id="adresse" name="adresse" required>
                                        @if ($errors->has('adresse'))
                                            <div style="color: red">{{ $errors->first('adresse') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        <label class="" for="quartier">{{__('partenariat.devenir-membre.votre-quartier')}} *</label>
                                        <input style="width:100%;" type="text" class="form-control mt-2" id="quartier" name="quartier" required>
                                        @if ($errors->has('quartier'))
                                            <div style="color: red">{{ $errors->first('quartier') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class="" for="email">{{__('partenariat.devenir-membre.email')}} *</label>
                                        <input style="width:100%;" type="text" class="form-control mt-2" id="email" name="email" required>
                                        @if ($errors->has('email'))
                                            <div style="color: red">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        <label class="" for="tel">{{__('partenariat.devenir-membre.tel')}} *</label>
                                        <input style="width:100%;" type="number" class="form-control mt-2" id="tel" name="tele" required>
                                        @if ($errors->has('tele'))
                                            <div style="color: red">{{ $errors->first('tele') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class="" for="siteWeb">{{__('partenariat.devenir-membre.site-web')}} </label>
                                        <input style="width:100%;" type="text" class="form-control mt-2" id="siteWeb" name="siteweb">
                                    </div>
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class="" for="DomaineExpertisePrincipal">{{__('partenariat.devenir-membre.domaine-dexpertise')}} </label>
                                        <input style="width:100%;" type="text" class="form-control mt-2" id="DomaineExpertisePrincipal" name="domaine">
                                    </div>
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        <label class="" for="AutreDomaineExpertise">{{__('partenariat.devenir-membre.autre-domaine-dexpertise')}}
                                        </label>
                                        <input style="width:100%;" type="text" class="form-control mt-2" id="AutreDomaineExpertise" name="autre_domaine">
                                    </div>
                                </div>

                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class="" for="Biographie">{{__('partenariat.devenir-membre.biographie-resumee')}} </label>
                                        <textarea rows="6" style="width:100%;" type="text" class="form-control mt-2" id="Biographie" name="biographie"></textarea>
                                    </div>
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class="">{{__('partenariat.devenir-membre.votre-principaux')}}</label>
                                        <input placeholder="1." style="width:100%;" type="text" class="form-control mt-2" id="principauxCentresInteret1" name="principaux1">
                                        <input placeholder="2." style="width:100%;" type="text" class="form-control mt-2" id="principauxCentresInteret2" name="principaux2">
                                        <input placeholder="3." style="width:100%;" type="text" class="form-control mt-2" id="principauxCentresInteret3" name="principaux3">
                                    </div>
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        <label class="">{{__('partenariat.devenir-membre.votre-suggestions')}}</label>
                                        <input placeholder="1." style="width:100%;" type="text" class="form-control mt-2" id="suggestionspropositions1" name="suggestions1">
                                        <input placeholder="2." style="width:100%;" type="text" class="form-control mt-2" id="suggestionspropositions2" name="suggestions2">
                                        <input placeholder="3." style="width:100%;" type="text" class="form-control mt-2" id="suggestionspropositions3" name="suggestions3">
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class=""> {{__('partenariat.devenir-membre.memebre-associations')}}</label><br />
                                        <label style="margin-right:50px;"><input style="width:15px;" type="radio" class="mt-2" value="Oui" name="dejamemebre"> {{__('partenariat.devenir-membre.oui')}}</label>
                                        <label><input style="width:15px;" type="radio" class="mt-2" value="Non" name="dejamemebre"> {{__('partenariat.devenir-membre.no')}}</label>
                                    </div>
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class="">{{__('partenariat.devenir-membre.lesquelles')}} :</label>
                                        <input placeholder="1." style="width:100%;" type="text" class="form-control mt-2" id="lesquelles1" name="lesquelles1">
                                        <input placeholder="2." style="width:100%;" type="text" class="form-control mt-2" id="lesquelles2" name="lesquelles2">
                                        <input placeholder="3." style="width:100%;" type="text" class="form-control mt-2" id="lesquelles3" name="lesquelles3">
                                    </div>
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class="" for="marraineParrain">{{__('partenariat.devenir-membre.votre-marraine-parrain')}}</b> </label>
                                        <input style="width:100%;" type="text" class="form-control mt-2" id="marraineParrain" name="marraine">
                                    </div>
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="form-group mt-4" style=" padding-right:10px;">
                                        <label class="">{{__('partenariat.devenir-membre.montant-annuelle')}} *</label><br />
                                        <label><input style="width:15px;" type="radio" class="mt-2" value="1000" name="cotisation" checked> 1000 {{__('partenariat.devenir-membre.dh')}}</label><br />
                                        <label><input style="width:15px;" type="radio" class="mt-2" value="5000" name="cotisation"> 5000 {{__('partenariat.devenir-membre.dh')}}</label><br />
                                        <label><input style="width:15px;" type="radio" class="mt-2" value="Montant supérieur" name="cotisation"> {{__('partenariat.devenir-membre.montant-superieur')}}</label>
                                    </div>
                                    @if ($errors->has('cotisation'))
                                        <div style="color: red">{{ $errors->first('cotisation') }}</div>
                                    @endif
                                    <div class="form-group mt-4" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <button class="btn"  style="width: 106px; margin-top: 35px;height: 40px;background:url(img/btn-valider.png) no-repeat;background-size:100% 100%;#66d81d;color:white;" type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
