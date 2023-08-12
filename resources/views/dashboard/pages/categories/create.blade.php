@extends('dashboard.partials.main')

@section('content')
    <div class="card">
        <form action="{{ route('categories.store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="card-header">
                <h4>Enregistrer une nouvelle catégorie</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Noms de la categorie</label>
                    <input type="text" name="name" class="form-control" required="">
                </div>
            </div>
            <div class="card-footer text-right">
                <input type="reset" class="btn btn-danger" value="Annuler" />
                <input type="submit" class="btn btn-primary ml-4" value="Enregistrer" />
            </div>
        </form>
    </div>
@endsection
