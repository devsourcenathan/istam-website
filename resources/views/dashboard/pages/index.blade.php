@extends('dashboard.partials.main')

@if (Auth::user()->role == 'student')
    @section('content')
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card">
                        <div class="body">
                            <div id="plist" class="people-list">
                                <h4 style="margin-left: 10px; margin-top: 8px">Categories</h4>
                                {{-- <div class="chat-search">
                            <input type="text" class="form-control" placeholder="Rechercher..." />
                        </div> --}}
                                <div class="m-b-20">
                                    <div id="chat-scroll">
                                        <ul class="chat-list list-unstyled m-b-0">
                                            <li class="clearfix">
                                                {{-- <img src="assets/img/users/user-4.png" alt="avatar"> --}}
                                                <a href="/dashboard" style="color: rgb(52, 51, 51); text-decoration: none"
                                                    class="about">
                                                    <div class="name">Tout les livres</div>
                                                    <div class="status">
                                                    </div>
                                                </a>
                                            </li>
                                            @foreach ($categories as $category)
                                                <li class="clearfix">
                                                    {{-- <img src="assets/img/users/user-4.png" alt="avatar"> --}}
                                                    <a href="/categories/find/{{ $category->id }}"
                                                        style="color: rgb(52, 51, 51); text-decoration: none"
                                                        class="about">
                                                        <div class="name">{{ $category->name }}</div>
                                                        <div class="status">
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="card">
                        <div class="chat">
                            <div class="chat-header clearfix">
                                <div class="chat-about">
                                    @isset($cat)
                                        <div class="chat-with">Livres de {{ $cat->name }}</div>
                                    @else
                                        <div class="chat-with">Tout les livres </div>
                                    @endisset
                                    <div class="chat-num-messages">{{ count($books) }} livres</div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($books as $book)
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                            <article class="article article-style-b">
                                                <div class="article-header">
                                                    <div class="article-image"
                                                        data-background="{{ asset($book->image ?? 'assets/images/digital.jpg') }}"">
                                                    </div>
                                                    <div class="article-badge">
                                                        <div class="article-badge-item bg-danger">
                                                            {{ $book->category->name }}
                                                        </div>
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
                                                        <a href="/students/{{ $book->title }}">Lire plus <i
                                                                class="fas fa-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer chat-form">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@else
    @section('content')
        <div class="row ">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Livres</h5>
                                        <h2 class="mb-3 font-18">{{ count($books) }}</h2>
                                        <p class="mb-0"><span class="col-green"></span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('admin/assets/img/banner/1.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Categories</h5>
                                        <h2 class="mb-3 font-18">{{ count($categories) }}</h2>
                                        <p class="mb-0"><span class="col-orange"></span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('admin/assets/img/banner/2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Etudiants</h5>
                                        <h2 class="mb-3 font-18">{{ $students }}</h2>
                                        <p class="mb-0"><span class="col-green"></span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="{{ asset('admin/assets/img/banner/3.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@endif
