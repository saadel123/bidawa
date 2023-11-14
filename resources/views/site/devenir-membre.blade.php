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
                        <!--   <p>
                            Vous êtes intéressé par la participation à nos actions ? Envoyez nous votre demande d’adhésion avec une présentation de votre parcours et de vos motivations.
                        </p>
                        -->
                        <h3 style="color:#00579e;font-weight:bold;"> Formulaire d'adhésion </h3>
                        <p>
                            Bienvenue sur notre plateforme d'adhésion. Nous vous remercions de l'intérêt que vous portez à
                            BIDAWA+. Nous vous invitons à consulter les statuts et à remplir le formulaire ci-après.
                        </p>
                    </div>
                    <div class="col-md-12" style="margin-top:30px;">
                        <div class="row">
                            <form class="form-inline" method="post" action="adhesion.php">
                                <div class="col-md-12" style="margin-bottom:20px;">
                                    <label>Civilité * : </label>
                                    <div style="text-align:center;">
                                        <label style="margin-right:60px;"><input type="radio" name="civilite"
                                                style="width:20px!important;" value="" checked /> Madame</label>
                                        <label><input type="radio" name="civilite" value="Monsieur"
                                                style="width:20px!important;" /> Monsieur</label>
                                    </div>
                                </div>
                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class="" for="nom">Nom *</label>
                                        <input style="width:100%;" type="text" class="form-control" id="nom"
                                            name="nom" required>
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        <label class="" for="prenom">Prénom *</label>
                                        <input style="width:100%;" type="text" class="form-control" id="prenom"
                                            name="prenom" required>
                                    </div>
                                </div>
                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class="" for="adresse">Adresse *</label>
                                        <input style="width:100%;" type="text" class="form-control" id="adresse"
                                            name="adresse" required>
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        <label class="" for="quartier">Votre quartier *</label>
                                        <input style="width:100%;" type="text" class="form-control" id="quartier"
                                            name="quartier" required>
                                    </div>
                                </div>
                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class="" for="email">Email *</label>
                                        <input style="width:100%;" type="text" class="form-control" id="email"
                                            name="email" required>
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        <label class="" for="tel">Tél *</label>
                                        <input style="width:100%;" type="text" class="form-control" id="tel"
                                            name="tel" required>
                                    </div>
                                </div>
                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class="" for="siteWeb">Site web </label>
                                        <input style="width:100%;" type="text" class="form-control" id="siteWeb"
                                            name="siteWeb">
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class="" for="DomaineExpertisePrincipal">Domaine d'expertise
                                            principal </label>
                                        <input style="width:100%;" type="text" class="form-control"
                                            id="DomaineExpertisePrincipal" name="DomaineExpertisePrincipal">
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        <label class="" for="AutreDomaineExpertise">Autre domaine d'expertise
                                        </label>
                                        <input style="width:100%;" type="text" class="form-control"
                                            id="AutreDomaineExpertise" name="AutreDomaineExpertise">
                                    </div>
                                </div>

                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class="" for="Biographie">Biographie résumée </label>
                                        <textarea rows="6" style="width:100%;" type="text" class="form-control" id="Biographie"
                                            name="Biographie">
                        </textarea>
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class="">Votre principaux centres d'intérêt pour Casablanca</label>
                                        <input placeholder="1." style="width:100%;" type="text" class="form-control"
                                            id="principauxCentresInteret1" name="principauxCentresInteret1">
                                        <input placeholder="2." style="width:100%;" type="text" class="form-control"
                                            id="principauxCentresInteret2" name="principauxCentresInteret2">
                                        <input placeholder="3." style="width:100%;" type="text" class="form-control"
                                            id="principauxCentresInteret3" name="principauxCentresInteret3">
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        <label class="">Votre suggestions et propositions</label>
                                        <input placeholder="1." style="width:100%;" type="text" class="form-control"
                                            id="suggestionspropositions1" name="suggestionspropositions1">
                                        <input placeholder="2." style="width:100%;" type="text" class="form-control"
                                            id="suggestionspropositions2" name="suggestionspropositions2">
                                        <input placeholder="3." style="width:100%;" type="text" class="form-control"
                                            id="suggestionspropositions3" name="suggestionspropositions3">
                                    </div>
                                </div>
                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class=""> Etes vous déjà memebre d'une ou plusieurs
                                            associations</label><br />
                                        <label style="margin-right:50px;"><input style="width:15px;" type="radio"
                                                class="form-control" value="Oui" name="dejaMembre"> Oui</label>
                                        <label><input style="width:15px;" type="radio" class="form-control"
                                                value="Non" name="dejaMembre"> Non</label>
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class="">Lesquelles :</label>
                                        <input placeholder="1." style="width:100%;" type="text" class="form-control"
                                            id="lesquelles1" name="lesquelles1">
                                        <input placeholder="2." style="width:100%;" type="text" class="form-control"
                                            id="lesquelles2" name="lesquelles2">
                                        <input placeholder="3." style="width:100%;" type="text" class="form-control"
                                            id="lesquelles3" name="lesquelles3">
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class="" for="marraineParrain">Votre marraine ou votre parrain au
                                            sein bidawa plus</b> </label>
                                        <input style="width:100%;" type="text" class="form-control"
                                            id="marraineParrain" name="marraineParrain">
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="col-md-12 membre" style="">
                                    <div class="form-group col-md-6" style=" padding-right:10px;">
                                        <label class="">Montant de la cotisation annuelle souhaitée *</label><br />
                                        <label><input style="width:15px;" type="radio" class="form-control"
                                                value="1000 DH" name="cotisation" checked> 1000 dh</label><br />
                                        <label><input style="width:15px;" type="radio" class="form-control"
                                                value="5000 dh" name="cotisation"> 5000 dh</label><br />
                                        <label><input style="width:15px;" type="radio" class="form-control"
                                                value="Montant supérieur" name="cotisation"> Montant supérieur</label>
                                    </div>
                                    <div class="form-group col-md-6" style=" padding-left:10px;">
                                        &nbsp;
                                    </div>
                                </div>
                                <button class="btn " name="adhesion"
                                    style="width: 106px; margin-top: 35px;height: 40px;background:url(img/btn-valider.png) no-repeat;background-size:100% 100%;#66d81d;color:white;"
                                    type="submit"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
