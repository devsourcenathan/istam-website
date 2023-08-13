@extends('dashboard.partials.main')

@section('content')
    <div class="card">
        <form action="{{ route('users.store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="card-header">
                <h4>Enregistrer un administrateur</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Noms</label>
                    <input type="text" name="name" class="form-control" required="">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required="">
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label>Mot de passe</label>
                        <input type="text" name="password" class="form-control" required="">
                    </div>
                    <div class="form-group col-6">
                        <label>Confirmation mot de passe</label>
                        <input type="text" name="password_confirmation" class="form-control" required="">
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <input type="reset" class="btn btn-danger" value="Annuler" />
                <input type="submit" class="btn btn-primary ml-4" value="Enregistrer" />
            </div>
        </form>
    </div>
@endsection
