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
        <h1>Slides</h1>
        <nav style="display: flex;justify-content: space-between;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                <li class="breadcrumb-item active">Slides</li>
            </ol>
            <a href="{{ route('slides.create') }}" class="btn btn-primary">Ajouter</a>
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
                                        <th scope="col">Titre</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Date événements</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($slides as $slide)
                                        <tr>
                                            <th scope="row">{{ $slide->id }}</th>
                                            <td>{{ $slide->title }}</td>
                                            <td>{{ $slide->url }}</td>
                                            <td>
                                                {{ $slide->created_at }}
                                            </td>
                                            <td>
                                                <a class="edit" href="{{ route('slides.edit', $slide->id) }}"
                                                    style="color:rgb(125, 125, 5)"><i
                                                        class="material-icons"></i>Modifier</a>
                                                <form action="{{ route('slides.destroy', $slide->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="delete" style="color:red"
                                                        onclick="return confirm('Are you sure you want to delete this item?');">
                                                        Supprimer
                                                    </button>
                                                </form>
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
