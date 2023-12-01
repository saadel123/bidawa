@extends('admin.layouts.master')
@section('content')
    <style>

    </style>
    <div class="pagetitle">
        <h1>Slides</h1>
        <nav style="display: flex;justify-content: space-between;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                <li class="breadcrumb-item active">Slides</li>
            </ol>
            <a href="{{ route('slides.index') }}" class="btn btn-outline-primary">Retour</a>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('slides.update', $slide) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Modifier</h3>
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @include('admin.layouts.forms.slides', ['slide' => $slide])
                            <div class="mt-5">
                                <button type="submit" class="btn btn-primary rounded-0"> <i class="bi bi-save"></i>
                                    Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
