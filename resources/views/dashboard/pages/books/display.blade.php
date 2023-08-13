@extends('dashboard.partials.main')

@section('content')
    {{-- @dd($book) --}}
    <embed src="{{ asset($book->url) }}" type="application/pdf" width="100%" height="600px">

    {{-- <iframe src="{{ asset($book->url) }}" width="100%" height="600px"></iframe> --}}
@endsection
