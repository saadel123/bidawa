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
                <h2 class="" style="margin-top: 30px;margin-bottom: 30px;">{{__('qui-sommes-nous.notre-organisation.title')}} </h2>
                <div class="row">

                    <div class="col-md-12">
                        {!!__('qui-sommes-nous.notre-organisation.description')!!}
                    </div>
                </div>
            </div>
            @if (session()->get('locale')=='fr' || session()->get('locale')=='')
            <div class="col-md-12">
                <h3 class="color-secondary" style="margin-top: 30px;margin-bottom: 30px;font-weight: bold;"> Membres
                    Fondateurs de Bidawa + </h3>
                <div class="row">

                    <div class="col-md-12">
                        <p> <b>Bidawa+</b> a été fondée par un groupe de citoyennes et citoyens de la ville ayant une
                            expérience dans la gestion des affaires publiques, privées, territoriales et associatives. </p>
                        <p>Bureau exécutif de Bidawa + : </p>
                        <ul>
                            <li>Raja Aghzadi, Présidente</li>
                            <li>Driss Benhima, Vice Président</li>
                            <li>Hakim Marrakchi, Vice Président</li>
                            <li>Abdellatif Komat, Vice Président</li>
                            <li>Mustapha Hanine, Vice Président</li>
                            <li>Safae Fikri, Secrétaire Générale</li>
                            <li>Younes Slaoui, Secrétaire Général Adjoint</li>
                            <li>Loubna Cherif Kanouni, Trésorière</li>
                            <li>Said Sekkat, Trésorier Adjoint</li>
                            <li>Assesseurs : <br> Amrani Mehdi, El Alaoui Ismaili Anouar, Fakhouri Chakib , Ksikes Aida,
                                Zaher Karim</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
