@extends('layouts.app')
@section('content')
    <style>
        button.control_prev,
        button.control_next {
            border: unset !important;
            background: transparent;
            color: #a1a1a1;
            font-size: 28px;
        }

        .bi-chevron-right,
        .bi-chevron-left {
            color: #a1a1a1;
            font-size: 28px;
        }
    </style>
    <div class="container">
        <div class="row" style="padding:0px;">
            <!-- slide lide-bidawa.png -->
            <div class="slider" id="slider" data-width="100">

                <button class="control_next"><span class="bi bi-chevron-right" aria-hidden="true"></span></button>
                <button class="control_prev"><span class="bi bi-chevron-left" aria-hidden="true"></span></button>

                <ul>
                    <li class="">
                        <div class="slide" style="background: url(img/slide5.jpg?<?php echo date('YmdHis'); ?>) no-repeat;">
                            <div class="shadow">

                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="slide" style="background: url(img/slide4.jpg?<?php echo date('YmdHis'); ?>) no-repeat;">
                            <div class="shadow">

                            </div>
                        </div>
                    </li>
                    <li class="actslide">
                        <div class="slide" style="background: url(img/slide-bidawa.png?<?php echo date('YmdHis'); ?>) no-repeat;">
                            <div class="shadow">
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="slide" style="background: url(img/slide-bidawa-4.png?<?php echo date('YmdHis'); ?>) no-repeat;">
                            <div class="shadow">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row bg-white" style="margin-top: 25px;">
            <div class="col-md-12">
                <h2 class="" style="margin-top: 30px;margin-bottom: 30px;"> {{ __('accueil.titre_mot_de_la_presidente') }} </h2>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-12 d-flex align-items-center justify-content-center">
                        <img class="pull-left" style="width:270px;margin-right: 41px;"
                            src="img/raja-aghzadi.jpg?<?php echo date('YmdHis'); ?>" width="100%" />
                    </div>
                    <div class="col-md-6 col-12 ">
                        {!! __('accueil.mot_de_la_presidente') !!}
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-white" style="margin-top: 25px;padding-bottom: 25px;">

            <div class="col-md-12" id="actualite">

                <h2 class="" style="margin-top: 30px;margin-bottom: 30px;">{{__('accueil.activites')}}</h2>

            </div>
            <div class="col-md-12" style="margin-bottom:95px">
                <img src="img/{{__('accueil.affiche')}}?<?php echo date('YmdHis'); ?>" width="100%"
                    style="border: 1px solid #a6a6a6;padding-bottom: 53px;" />
            </div>
            <div class="col-md-12" style="margin-bottom:95px">
                <img src="img/{{__('accueil.affiche2')}}?<?php echo date('YmdHis'); ?>" width="100%"
                    style="border: 1px solid #a6a6a6;padding-bottom: 53px;" />
            </div>
            <div class="col-md-6">
                <img src="img/bidawa-img.png?<?php echo date('YmdHis'); ?>" width="100%" />
                <p style="margin-top: 20px;"> Dans le cadre de la mobilisation nationale pour faire face à l’épreuve du
                    Covid 19, notre association, Bidawa+, a lancé l’action "Ordinateur pour tous" dans l’objectif d’équiper
                    des familles démunies, à Casablanca, d’ordinateurs permettant à leurs enfants de bénéficier du
                    télé-enseignement, de mieux supporter le confinement et de contribuer, par la même occasion, à la
                    réduction de la fracture numérique dont souffre cette catégorie de nos concitoyens. </p>
            </div>
            <div class="col-md-6" style="height: 100%;">
                <p>
                    Dans ce contexte, nous faisons appel à la générosité des donateurs, notamment les entreprises, pour
                    mettre à la disposition de l’association, des PC ou des tablettes en bon état de marche.
                </p>
                <p> La distribution des équipements collectés dans le cadre de l’action « Ordinateur pour tous » est
                    réalisée en étroite collaboration avec les structures de l’Académie Régionale de l’Education et de la
                    Formation (AREF) et avec l’appui des autorités locales.
                </p>
                <p>
                    Un grand merci aux entreprises qui nous ont soutenu dans cette première opération citoyenne : Groupe
                    CDG, Société Générale, BMCI, DISWAY, DXC Technology, Data-Plus, Groupe Le Matin, Groupe Label’Vie, CFG,
                    Maroclear, Valyans, Orange, Finances News, Dial Technologie, Itecha, Involys, CIH Bank, Mawarid, MDJS,
                    Kitéa, Lydec, Nord Africa Bottling Compagny, SMAEX …
                </p>

            </div>
            <div class="col-md-12">
                <a href="contact.php">
                    <img class="img-envoyer" src="img/icone-envoyer.png?<?php echo date('YmdHis'); ?>" style="width: 300px;" />
                </a>
            </div>
        </div>
        <div class="row " style="margin-top: 25px;padding:0px!important">
            <img src="img/sponsor-bidawa.png?<?php echo date('YmdHis'); ?>" style="width:100%;height:auto;" />
            <img src="img/sponsor-bidawa-2.png?<?php echo date('YmdHis'); ?>" style="width:100%;height:auto;" />
            <img src="img/sponsor-bidawa-3.png?<?php echo date('YmdHis'); ?>" style="width:100%;height:auto;" />
            <img src="img/sponsor-bidawa-4.png?<?php echo date('YmdHis'); ?>" style="width:100%;height:auto;" />
            <img src="img/sponsor-bidawa-5.png?<?php echo date('YmdHis'); ?>" style="width:100%;height:auto;" />
        </div>
    </div>
@endsection
