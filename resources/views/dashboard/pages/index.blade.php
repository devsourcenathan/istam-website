@extends('dashboard.partials.main')

@section('content')
    <h2 class="section-title">Categories de livre</h2>

    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article">
                <div class="article-header">
                    <div class="article-image" data-background="{{ asset('admin/assets/img/blog/img08.png') }}">
                    </div>
                    <div class="article-title">
                        <h2><a href="#">The oddest place you will find photo studios</a></h2>
                    </div>
                </div>
                <div class="article-details">
                    <div class="article-cta">
                        <a href="#" class="btn btn-primary">Afficher les livres</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="row" style="display: flex; justify-content: space-between; margin: 10px">
        <h2 class="section-title">Derniers livres</h2>
        <a href="" class="section-title">Afficher plus</a>
    </div>
    <div class="row">
        @foreach ($books as $book)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                    <div class="article-header">
                        <div class="article-image"
                            data-background="{{ asset($book->image ?? 'assets/images/digital.jpg') }}"">
                        </div>
                        <div class="article-badge">
                            <div class="article-badge-item bg-danger">{{ $book->category->name }}</div>
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-title">
                            <h2><a href="#">{{ $book->title }}</a></h2>
                        </div>
                        <p>
                            {{ $book->description }}
                        </p>
                        <div class="article-cta">
                            <a href="/students/{{ $book->title }}">Lire plus <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
@endsection
