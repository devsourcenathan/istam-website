@extends('dashboard.partials.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Liste des categories</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <a href="/categories/create" class="btn btn-primary mb-4">
                    Ajouter une categories
                </a>

                <br>
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Actions</button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-hover dropdown-icon"
                                            data-toggle="dropdown">
                                            <span class="sr-only"></span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item"
                                                href="/categories/{{ $category->id }}/edit">Modifier</a>
                                            <form method="delete" action="{{ route('categories.destroy', $category->id) }}"
                                                method="delete"">
                                                @method('DELETE')
                                                @csrf
                                                <input class="dropdown-item" type="submit" value="Supprimer">
                                            </form>
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
