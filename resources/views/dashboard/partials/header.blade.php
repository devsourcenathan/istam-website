<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>ISTAM - Espace Etudiant</title>
    <!-- General CSS Files -->
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/bundles/izitoast/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('admin/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                                <i data-feather="align-justify"></i></a></li>


                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <figure class="avatar mr-2 avatar-sm">
                                <img alt="image" src="{{ asset('admin/assets/img/avatar.jpg') }}" class="">
                                <i class="avatar-presence online"></i>
                            </figure>

                            <span class="d-sm-none d-lg-inline-block"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">{{ Auth::user()->name }}</div>

                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="route('logout')"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                    class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                                    Se deconnecter
                                </a>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/"> <img alt="image" height="50" width="50"
                                src="{{ asset('assets/images/logo.png') }}" class="header-logo" />
                            {{-- <span class="logo-name">Evaluations</span> --}}
                        </a>
                    </div>
                    <ul class="sidebar-menu">

                        @if (Auth::user()->role === 'teacher')
                            <li class="{{ request()->is('/') ? 'dropdown active' : 'dropdown' }}">
                                <a href="/dashboard" class="nav-link">
                                    <i class="fa fa-home"></i>
                                    <span> Tableau de bord</span>
                                </a>
                            </li>

                            <li class="{{ request()->is('books') ? 'dropdown active' : 'dropdown' }}">
                                <a href="/books" class="nav-link">
                                    <i class="fas fa-book"></i>
                                    <span>Livres</span>
                                </a>
                            </li>
                        @endif
                        @if (Auth::user()->role === 'admin')
                            <li class="{{ request()->is('/') ? 'dropdown active' : 'dropdown' }}">
                                <a href="/dashboard" class="nav-link">
                                    <i class="fa fa-home"></i>
                                    <span> Tableau de bord</span>
                                </a>
                            </li>

                            <li class="{{ request()->is('categories') ? 'dropdown active' : 'dropdown' }}">
                                <a href="/categories" class="nav-link">
                                    <i class="fas fa-bookmark"></i>
                                    <span>Categories</span>
                                </a>
                            </li>

                            <li class="{{ request()->is('books') ? 'dropdown active' : 'dropdown' }}">
                                <a href="/books" class="nav-link">
                                    <i class="fas fa-book"></i>
                                    <span>Livres</span>
                                </a>
                            </li>

                            <li class="{{ request()->is('students') ? 'dropdown active' : 'dropdown' }}">
                                <a href="/students" class="nav-link">
                                    <i class="fas fa-users"></i>
                                    <span>Etudiants</span>
                                </a>
                            </li>

                            <li class="{{ request()->is('teachers') ? 'dropdown active' : 'dropdown' }}">
                                <a href="/teachers" class="nav-link">
                                    <i class="fas fa-user-md"></i>
                                    <span>Enseignants</span>
                                </a>
                            </li>

                            <li class="{{ request()->is('users') ? 'dropdown active' : 'dropdown' }}">
                                <a href="/users" class="nav-link">
                                    <i class="fas fa-user-shield"></i>
                                    <span>Administrateurs</span>
                                </a>
                            </li>

                            {{-- <li class="{{ request()->is('personal') ? 'dropdown active' : 'dropdown' }}">
                                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                        class="fas fa-users"></i><span>Personnel</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="/personal/create">Ajouter un personnel</a></li>
                                    <li><a class="nav-link" href="/personal">Liste du personnel</a></li>
                                </ul>
                            </li> --}}
                        @endif
                    </ul>
                </aside>
            </div>
