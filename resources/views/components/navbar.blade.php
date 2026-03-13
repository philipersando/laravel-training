    <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{  route('login') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        @auth
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">My Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Rents</a>
                </li>
            </ul>
            <span class="navbar-text">
                <a href="{{ route('logout') }}" class="nav-link">Logout</a>
            </span>
        @endauth
        </div>
    </div>
    </nav>
