@extends('dashboard.partials.main')

@section('content')
    {{-- @dd($book) --}}
    <div class="main-button">
        <a href="{{ route('dashboard') }}" class="btn btn-primary m-2">Retour</a>
    </div>
    {{-- <embed src="{{ asset($book->url) }}" type="application/pdf" width="100%" height="600px" target="_blank" download="no"
        ncontextmenu="return false"> --}}

    <iframe src="{{ asset($book->url) }}" visibility="hidden" width="100%" height="600px" download="no"></iframe>
@endsection
