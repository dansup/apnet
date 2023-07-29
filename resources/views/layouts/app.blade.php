<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>activitypub.network</title>
    <meta name="description" content="An open-source activitypub network and fediverse database, powered by FediDB">
    <meta name="keywords" content="activitypub, fediverse, federation, mastodon, pixelfed, peertube, lemmy, pleroma, firefish">
    @include('layouts.partial.theme-switcher')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.partial.svg-icons')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    activitypub.network
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="q" value="{{request()->input('q')}}">
                        </form>
                    </ul>

                    <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav">
                        <li class="nav-item dropdown">
                        <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center"
                                id="bd-theme"
                                type="button"
                                aria-expanded="false"
                                data-bs-toggle="dropdown"
                                data-bs-display="static"
                                aria-label="Toggle theme (auto)">
                          <svg class="bi my-1 theme-icon-active"><use href="#circle-half"></use></svg>
                          <span class="d-lg-none ms-2" id="bd-theme-text">Toggle theme</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text">
                          <li>
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                              <svg class="bi me-2 opacity-50 theme-icon"><use href="#sun-fill"></use></svg>
                              Light
                              <svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
                            </button>
                          </li>
                          <li>
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                              <svg class="bi me-2 opacity-50 theme-icon"><use href="#moon-stars-fill"></use></svg>
                              Dark
                              <svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
                            </button>
                          </li>
                          <li>
                            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                              <svg class="bi me-2 opacity-50 theme-icon"><use href="#circle-half"></use></svg>
                              Auto
                              <svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
                            </button>
                          </li>
                        </ul>
                        </li>
                        <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                            <hr class="d-lg-none my-2 text-white-50">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/dansup/apnet">Source</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <p class="text-center mb-0">An open-source activitypub network and fediverse database, powered by FediDB</p>
            <p class="small text-center text-muted">made by <a href="https://github.com/dansup/apnet">dansup</a>. data from <a href="https://fedidb.org">fediDB</a>. last updated 2023-07-29</p>
        </footer>
    </div>
</body>
</html>
