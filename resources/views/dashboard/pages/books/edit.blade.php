@extends('dashboard.partials.main')

@section('content')
    <div class="card">
        <form action="{{ "/books/$book->id" }}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="card-header">
                <h4>Modifier le livre</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="form-group col-6">
                        <label>Titre du livre</label>
                        <input type="text" name="title" value="{{ $book->title }}" class="form-control" required="">
                    </div>

                    <div class="form-group col-6">
                        <label>Categorie du livre</label>
                        <select name="category_id" id="category_id" required="" class="form-control">
                            <option selected value="0">Choisir une categorie</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label>Description du livre</label>
                    <input type="text" name="description" value="{{ $book->description }}" class="form-control"
                        required="">
                </div>


                <div class="form-group">
                    <label>Image du livre</label>
                    {{-- <input type="file" name="image" class="form-control" required=""> --}}
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choisir l'image du livre</label>
                    </div>
                </div>


                <div class="form-group">
                    <label>Ajouter le livre (pdf)</label>
                    <div class="custom-file">
                        <input type="file" name="source" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choisir le livre (pdf)</label>
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
