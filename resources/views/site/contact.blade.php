@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding: 0px; margin: 0px;">
                <img src="img/slide- bidawa-3.png?<?php echo date('YmdHis'); ?>" width="100%" />
            </div>
        </div>
        <div class="row bg-bidawa color-white" id="contact" style="margin-top: 25px;">
            <div class="col-md-12">
                <h2 class="" style="margin-top: 30px;margin-bottom: 30px;color: white!important;"> Contact </h2>
                <div class="row ">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7 ">
                                <form action="send.php" method="post" style="padding-bottom:50px;" class="mt-3">
                                    <div class="form-group ">
                                        <span class="text-white" style="font-size: 14px;">Nom et Prénom </span>
                                        <input type="text" name="fullname" class="form-control form-rounded" required>
                                    </div>
                                    <div class="form-group">
                                        <span class="text-white" style="font-size: 14px;">Tél </span>
                                        <input type="text" name="phone" class="form-control form-rounded" required>
                                    </div>
                                    <div class="form-group ">
                                        <span class="text-white" style="font-size: 14px;">Email </span>
                                        <input type="text" name="email" class="form-control form-rounded" required>
                                    </div>
                                    <div class="form-group ">
                                        <span class="text-white" style="font-size: 14px;">&nbsp;</span>
                                        <select name="choix"
                                            class="form-control form-rounded color-secondary select-contact" required>
                                            <option>Demande d’adhésion</option>
                                            <option>Contribution Action « Ordinateur pour tous »</option>
                                            <option>Autres contributions</option>
                                            <option>Autres</option>
                                        </select>
                                    </div>
                                    <div class="form-group ">
                                        <span class="text-white" style="font-size: 14px;">Message </span>
                                        <textarea name="message" id="" class="form-control form-rounded color-secondary" required
                                            placeholder="Écrivez votre message." cols="30" rows="6"></textarea>
                                    </div>
                                    <div class="form-group " style="float: right;">

                                        <button type="submit" name="envoyer"
                                            style="font-size: 16px;font-weight: bold;padding-left: 40px;padding-right: 40px;letter-spacing: 2px;"
                                            class="btn form-rounded bg-light color-secondary">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 text-white mt-5 contact-info">
                                <div class="pl-3 " style="padding-bottom:50px;">
                                    <br />
                                    <p style="color: white!important;"><b>Adresse : </b> 95, Bd Mohammed V Casablanca, Maroc
                                    </p>
                                    <p style="color: white!important;"><b>Email : </b> contact@bidawaplus.ma
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
