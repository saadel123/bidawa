@extends('admin.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Membres</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">membres</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard profile">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview" role="tabpanel">
                                <h5 class="card-title">Details</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Civilité</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->civilite }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nom et Prénom </div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->nom .' '. $membre->prenom }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Adresse </div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->adresse }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->email }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tél</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->tele }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Quartier</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->tele }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Site web</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->siteweb }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Domaine d'expertise principal</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->domaine }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Autre domaine d'expertise</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->autre_domaine }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Biographie résumée</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->biographie }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Votre principaux centres d'intérêt pour Casablanca</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->principaux }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Votre suggestions et propositions</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->suggestions }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Etes vous déjà memebre d'une ou plusieurs associations</div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->dejamemebre }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Lesquelles </div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->lesquelles }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Votre marraine ou votre parrain au sein bidawa plus </div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->marraine }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Montant de la cotisation annuelle souhaitée </div>
                                    <div class="col-lg-9 col-md-8">{{ $membre->cotisation }}</div>
                                </div>
                                <div class="mt-5">
                                    <a href="../membres" type="reset" class="btn btn-secondary rounded-0"><i
                                            class="bi bi-reply"></i> Retour</a>
                                </div>
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
    </section>
@endsection
