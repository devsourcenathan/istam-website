@extends('dashboard.partials.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Liste des livres</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <a href="/books/create" class="btn btn-primary mb-4">
                    Ajouter un livre
                </a>

                <br>
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nom</th>
                            <th>Categorie</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td><img src="{{ asset($book->image ?? 'assets/images/digital.jpg') }}" height="50"
                                        width="50" /></td>
                                <td>{{ $book->title }}</td>
                                <td>
                                    {{ $book->category->name }}
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Actions</button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-hover dropdown-icon"
                                            data-toggle="dropdown">
                                            <span class="sr-only"></span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="/books/{{ $book->id }}/edit">Modifier</a>
                                            <a class="dropdown-item" href="/books/{{ $book->id }}/delete">Supprimer</a>

                                            {{-- <a class="dropdown-item"
                                                href="{{ route('categories.destroy', $category->id) }}">Supprimer</a> --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>


        </div>
        <!-- /.card-body -->

    </div>
@endsection
