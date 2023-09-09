@extends('dashboard.partials.main')

@section('content')
    <div class="main-button">
        <a href="{{ route('dashboard') }}" class="btn btn-primary m-2">Retour</a>
    </div>


    <embed src="{{ asset($book->url) }}" id="pdf-container" width="100%" height="600px"></embed>
@endsection
