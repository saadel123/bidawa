@extends('admin.layouts.master')
<style>
    th,
    td {
        padding: 5px;
        padding-right: 15px;
    }

    .datatable-table th a {
        padding-right: 20px !important;
    }

    #imglist {
        max-height: 70px;
    }
    .delete{
        outline: none;border: none;background-color: transparent;
    }
</style>
@section('content')
    <div class="pagetitle">
        <h1>événements</h1>
        <nav style="display: flex;justify-content: space-between;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                <li class="breadcrumb-item active">événements</li>
            </ol>
            {{-- <a href="{{ route('contacts.create') }}" class="btn btn-primary">Ajouter</a> --}}
        </nav>
    </div>
    <section class="section container">
        <div class="row">
            <div class="col-lg-12" style="margin: auto;">
                <div class="row">
                    <div class="card p-3">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nom et Prénom</th>
                                        <th scope="col">Tél</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Demande</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <th scope="row">{{ $contact->id }}</th>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>
                                                {{ $contact->tele }}
                                            </td>
                                            <td>
                                                {{ $contact->choix }}
                                            </td>
                                            <td>
                                                <a class="edit" href="{{ route('contacts.show', $contact->id) }}"
                                                    style="color:rgb(125, 125, 5)"><i
                                                        class="material-icons"></i>Afficher</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
