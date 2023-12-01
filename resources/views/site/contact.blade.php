@extends('layouts.app')
@section('title','Contact')
@section('description','Contactez Bidawa+ pour un Casablanca meilleur : service public, mobilité, urbanisme, hygiène, sécurité, environnement. Agissons ensemble')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding: 0px; margin: 0px;">
                <img src="img/slide- bidawa-3.png?<?php echo date('YmdHis'); ?>" width="100%" />
            </div>
        </div>
        <div class="row bg-bidawa color-white" id="contact" style="margin-top: 25px;padding: 10px;">
            <div class="col-md-12">
                <h1 class="" style="margin-top: 30px;margin-bottom: 30px;color: white!important;">
                    {{ __('contact.title') }} </h2>
                <div class="row ">
                    <div class="col-md-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-7 ">
                                <form action="{{ route('store.contact') }}" method="post" style="padding-bottom:50px;"
                                    class="mt-3">
                                    @csrf
                                    <div class="form-group ">
                                        <span class="text-white"
                                            style="font-size: 14px;">{{ __('contact.nom-et-prenom') }}</span>
                                        <input type="text" name="name" class="form-control form-rounded">
                                        @if ($errors->has('name'))
                                            <div style="color: red">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <span class="text-white" style="font-size: 14px;">{{ __('contact.tel') }} </span>
                                        <input type="text" name="tele" class="form-control form-rounded" required>
                                        @if ($errors->has('tele'))
                                            <div style="color: red">{{ $errors->first('tele') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group ">
                                        <span class="text-white" style="font-size: 14px;">{{ __('contact.titre-email') }}
                                        </span>
                                        <input type="text" name="email" class="form-control form-rounded" required>
                                        @if ($errors->has('email'))
                                            <div style="color: red">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group ">
                                        <span class="text-white" style="font-size: 14px;">&nbsp;</span>
                                        <select name="choix" class="form-control form-rounded color-secondary select-contact" required>
                                            @foreach ($evenement as $item)
                                            <option>{{ $item->title }}</option>
                                            @endforeach
                                            <option>{{ __('contact.select.option1') }}</option>
                                            <option>{{ __('contact.select.option2') }}</option>
                                            <option>{{ __('contact.select.option3') }}</option>
                                            <option>{{ __('contact.select.option4') }}</option>
                                        </select>
                                        @if ($errors->has('choix'))
                                            <div style="color: red">{{ $errors->first('choix') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group ">
                                        <span class="text-white" style="font-size: 14px;">{{ __('contact.message') }}
                                        </span>
                                        <textarea name="message" id="" class="form-control form-rounded color-secondary" required placeholder=""
                                            cols="30" rows="6"></textarea>
                                        @if ($errors->has('message'))
                                            <div style="color: red">{{ $errors->first('message') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group mt-4" style="float: right;">
                                        <button type="submit" style="font-size: 16px;font-weight: bold;padding-left: 40px;padding-right: 40px;letter-spacing: 2px;" class="btn form-rounded bg-light color-secondary">
                                            {{ __('contact.envoyer') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 text-white mt-5 contact-info">
                                <div class="pl-3 " style="padding-bottom:50px;">
                                    <br />
                                    <p style="color: white!important;"><b>{{ __('contact.titre-adresse') }} : </b>
                                        {{ __('contact.adresse') }}
                                    </p>
                                    <p style="color: white!important;"><b>{{ __('contact.titre-email') }} : </b>
                                        contact@bidawaplus.ma
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
