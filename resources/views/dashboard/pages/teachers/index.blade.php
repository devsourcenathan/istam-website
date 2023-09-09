@extends('dashboard.partials.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Liste des enseignants</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table-responsive">
                <a href="/teachers/create" class="btn btn-primary mb-4">
                    Ajouter un enseignant
                </a>

                <br>
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Actions</button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-hover dropdown-icon"
                                            data-toggle="dropdown">
                                            <span class="sr-only"></span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            <a class="dropdown-item" href="/teachers/{{ $teacher->id }}/edit">Modifier</a>
                                            <a class="dropdown-item"
                                                href="/teachers/{{ $teacher->id }}/delete">Supprimer</a>

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
