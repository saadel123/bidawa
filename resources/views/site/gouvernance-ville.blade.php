@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12" style="padding: 0px; margin: 0px;">
                <img src="img/slide bidawa.png?<?php echo date('YmdHis'); ?>" width="100%" />
            </div>
        </div>

        @if (session()->get('locale')=='fr' || session()->get('locale')=='')
        <div class="row bg-white" style="margin-top: 25px;padding-bottom: 25px;">
            <div class="col-md-12" style="">
                <h1 class=""
                    style="margin-top: 30px;margin-bottom: 30px;font-size:22px;font-weight:bold;color:#00579e;">
                    Bref aperçu sur le rôle des différentes entités juridiques intervenant dans la gestion de la ville de
                    Casablanca
                </h1>
                <p>
                    La décentralisation joue un rôle primordial dans le processus de développement des institutions
                    politiques et administratives du Royaume du Maroc. Ce processus a été marqué par des phases importantes
                    de transfert aux collectivités locales, de compétences étendues dans de nombreux domaines.
                </p>
                <p>
                    Consacrées par la constitution de notre pays, les collectivités locales ont été dotées d’un arsenal
                    juridique important et diversifié qui n’a cessé de progresser au rythme des progrès réalisés et des
                    étapes franchies dans de nombreux domaines relevant des compétences de ces collectivités.
                </p>
                <p>
                    Il convient de signaler que la décentralisation ne peut se concrétiser sans déconcentration qui
                    nécessite un transfert de compétences du centre vers le local.</p>
                <p>
                    De ce fait, plusieurs entités juridiques interviennent dans la gestion de la commune du Grand Casablanca
                    dont les attributions peuvent se résumer comme suit :
                </p>


                <h1 class="" style="margin-top: 30px;margin-bottom: 30px;color:#0399de;font-size:23px;">1- Le Wali
                </h1>
                <p>

                    Le Wali est la plus haute autorité administrative de la Wilaya de Casablanca. Il met en œuvre la
                    politique du gouvernement concernant le développement de la région de Casablanca et l’aménagement du
                    territoire et anime et coordonne l’activité des gouverneurs des provinces et préfectures.
                </p>
                <p>
                    Le Wali a également la charge de la réussite du programme du développement régional. Ainsi, il est
                    associé étroitement à la préparation et à l’exécution du programme national du développement de la
                    nation.

                </p>

                <h1 class="" style="margin-top: 30px;margin-bottom: 30px;color:#0399de;font-size:23px;"> 2- Le
                    Gouverneur</h1>
                <div class="gouvernance-tableaux" style="width:100%;text-align:center;">
                    <img src="/img/tableaux-1.png" style="width:90%;" />
                </div>

                <p style="color:#1e81e2!important;">
                    Notons que les compétences du Wali et du Gouverneur sont prévues par les articles 45 et suivantsde la
                    loi n° 79-00 relative à l'organisation des collectivités préfectorales et provinciales.
                </p>
                <h1 class="" style="margin-top: 30px;margin-bottom: 30px;color:#0399de;font-size:23px;">
                    3- Les organes territoriaux de l’Etat au niveau infra-provincial
                </h1>
                <div class="gouvernance-tableaux" style="width:100%;text-align:center;">
                    <img src="/img/tableaux-2.png" style="width:90%;" />
                </div>
                <p style="color:#1e81e2!important;">
                    Il est à noter que l’organisation du corps des agents d’autorité est prévue par l’article premier et
                    suiv. du Dahir n° 1-08-67 du 27 rejeb 1429 (31 juillet 2008) relatif au Corps des agents d'autorité.
                </p>
                <h1 class="" style="margin-top: 30px;margin-bottom: 30px;color:#0399de;font-size:23px;">
                    4- Le Centre Régional des investissements
                </h1>
                <p>
                    <i>
                        " Les centres régionaux d'investissement, placés sous l'autorité des Walis de régions, sont à ce
                        titre constitués en services extérieurs du ministère de l'intérieur."</i>
                    <span style="font-size:15px;"> (Article premier du décret n° 2-03-727 du 2 kaada 1424 (26 décembre 2003)
                        relatif à l'organisation des centres régionaux d'investissement)
                    </span>
                </p>
                <p>

                    Le Centre régional d'investissements, placé sous l'autorité du wali, qui constitue l'administration
                    territoriale interlocutrice privilégiée pour les investisseurs, doit être géré par un haut fonctionnaire
                    dont le grade doit être en relation avec le niveau de ses responsabilités. C'est pourquoi nous avons
                    décidé qu'il serait nommé par Notre Majesté, choisi pour ses compétences dans le domaine concerné, ainsi
                    que pour ses qualités humaines, et doté du statut de directeur d'administration centrale.Le centre
                    régional d'investissement a deux fonctions essentielles : l'aide à la création d'entreprises et l'aide
                    aux investisseurs.
                    <span style="font-size:15px;"> (Lettre adressée par S.M. le Roi Mohammed VI au Premier ministre au sujet
                        de la gestion déconcentréede l'investissement.)
                    </span>
                </p>

                <p>
                    Le Centre Régional d’Investissement de la Région de Casablanca-Settat quant à lui est chargé de
                    contribuer à la mise en œuvre de la politique de l'Etat en matière de développement, d'incitation, de
                    promotion et d'attraction des investissements à l'échelon régional et d'accompagnement global des
                    entreprises, notamment les petites et moyennes entreprises et les très petites entreprises. En tant que
                    guichet unique, il a pour principales missions :
                <ul class="gouvernance-list" style="">
                    <li>
                        L'offre de services au profit des investisseurs et l'accompagnement des petites et moyennes
                        entreprises et des très petites entreprises- maison de l'investisseur</li>
                    <li>L’impulsion économique de la région et l’offre territoriale</li>
                    <li>La Médiation</li>
                </ul>
                </p>
                <p>
                    La loi 47-18 portant réforme des centres régionaux d’investissement et création des commissions
                    régionales unifiées d’investissement traite des missions , des organes d’administration et de gestion,
                    de l’organisation administrative et financière ainsi que du contrôle de ces centres.
                </p>

                <h1 class="" style="margin-top: 30px;margin-bottom: 30px;color:#0399de;font-size:23px;">
                    5- L’Agence Urbaine de Casablanca
                </h1>
                <p>
                    D’après le Dahir portant loi n 1-84-188 du 13 Moharrem 1405 (9 octobre 1984) relatif à l'Agence Urbaine
                    de Casablanca tel que modifié et complété par le Dahir portant loi n"1-93-323 du 06 octobre 1993,
                    l'Agence Urbaine de Casablanca est un établissement public doté de la personnalité morale et de
                    l'autonomie financière et placé sous la tutelle du Ministre de l'Intérieur et le contrôle financier de
                    l'Etat.
                </p>
                <p>
                    Dans les limites de sa compétence territoriale qui comprend l'ensemble des communes urbaines et rurales
                    de la Wilaya du Grand Casablanca ainsi que les autres zones englobées dans le Schéma Directeur
                    d'Aménagement Urbain du Grand Casablanca, l’Agence a pour mission :
                <ul class="gouvernance-list">
                    <li>
                        Réaliser les études nécessaires à l'établissement du Schéma Directeur d'Aménagement Urbain du Grand
                        Casablanca et de suivre l'exécution des orientations qui y sont définies.</li>
                    <li>Programmer les projets d'aménagement inhérents à la réalisation des objectifs du Schéma Directeur.
                    </li>
                    <li>Etablir les projets de documents d'urbanisme réglementaires notamment les plans d'aménagement et
                        leurs règlements.</li>
                    <li>Etc….</li>
                </ul>
                </p>

                <h1 class="" style="margin-top: 30px;margin-bottom: 30px;color:#0399de;font-size:23px;">
                    6- Les Sociétés de Développement Local (SDL)</h1>

                <p>

                    La société de développement local (SDL) est l’un de ces outils novateurs de gestion de la chose publique
                    qui s’inscrit dans le prolongement des expériences passées en matière de gestion de la chose publique.
                    Depuis le Dahir n°1-08153 du 18 février 2009, portant promulgation de la loi n° 17-08 modifiant et
                    complétant la loi n° 78-00 portant charte communale, la SDL dispose d’un cadre juridique.
                </p>
                <p>
                    La ville de Casablanca est aujourd’hui gérée par une dizaine de SDL avec chacune des secteurs dédiés
                    (infrastructures, mobilité, gestion des marchés communaux, animation culturelle, patrimoine…). Il s’agit
                    essentiellement des SDL suivantes : Casa Aménagement, Casa Transport, Casa Prestations, Casa Events et
                    Animation, Casa Patrimoine et IdmajeSakane.

                </p>


            </div>
        </div>
        @else
        <h2 class="" style="margin-top: 30px;margin-bottom: 30px;">En cours&nbsp;  </h2>
        @endif
    </div>
@endsection
