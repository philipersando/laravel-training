    <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        @auth
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('car_list') }}">For Rent</a>
                </li>    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        My Cars
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('create_car') }}">Create New</a></li>
                        <li><a class="dropdown-item" href="{{ route('owned_car') }}">Owned Cars</a></li>
                        <li><a class="dropdown-item" href="{{  route('owned_rental') }}">Owned Car Rentals</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Own Rent</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <span class="navbar-text me-3 text-white fw-semibold">
                    Hi, {{ auth()->user()->first_name }}
                </span>
                <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm">Logout</a>
            </div>
        @endauth
        </div>
    </div>
    </nav>
