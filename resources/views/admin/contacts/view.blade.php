@extends('admin.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Contacts</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                <li class="breadcrumb-item active">Contacts</li>
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
                                    <div class="col-lg-3 col-md-4 label ">Nom et Prénom </div>
                                    <div class="col-lg-9 col-md-8">{{ $contact->name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ $contact->email }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tél</div>
                                    <div class="col-lg-9 col-md-8">{{ $contact->tele }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Demande</div>
                                    <div class="col-lg-9 col-md-8">{{ $contact->message }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Message</div>
                                    <div class="col-lg-9 col-md-8">{{ $contact->choix }}</div>
                                </div>
                                <div class="mt-5">
                                    <a href="../contacts" type="reset" class="btn btn-secondary rounded-0"><i
                                            class="bi bi-reply"></i> Retour</a>
                                </div>
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
    </section>
@endsection
