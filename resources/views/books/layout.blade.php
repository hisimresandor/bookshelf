@extends('layout')

@section('page')
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">Könyvespolc</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create') }}">Könyv hozzáadása +</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0" action="{{ route('index') }}">
                <input class="form-control me-sm-2" type="text" placeholder="Keresés" name="search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Keresés</button>
            </form>
            <form class="d-flex my-2 my-lg-0 ms-sm-5" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Kijelentkezés</button>
            </form>
        </div>
    </div>
</nav>

<div class="container pb-5 pt-5">
    @yield('content')
</div>
@endsection