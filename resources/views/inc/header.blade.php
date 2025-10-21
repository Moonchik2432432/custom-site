<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datu Bāze</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<header class="p-3 mb-4 border-bottom bg-light">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <!-- Logo -->
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <span class="fs-4">My Site</span>
            </a>

            <!-- Навигация -->
            <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="{{ url('/') }}"
                       class="nav-link px-2 {{ request()->is('/') ? 'link-secondary' : 'link-dark' }}">
                        Home
                    </a>
                </li>

                @auth
                    <li>
                        <a href="{{ url('/data') }}"
                           class="nav-link px-2 {{ request()->is('data*') ? 'link-secondary' : 'link-dark' }}">
                            Data
                        </a>
                    </li>
                @endauth

                <li>
                    <a href="{{ url('/contacts') }}"
                       class="nav-link px-2 {{ request()->is('contacts') ? 'link-secondary' : 'link-dark' }}">
                        Kontakts
                    </a>
                </li>
            </ul>

            <!-- Кнопки логина / логаута -->
            <div class="text-end">
                @auth
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger me-2">Iziet</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                    <a href="{{ route('loginn') }}" class="btn btn-primary">Sign-up</a>
                @endauth
            </div>
        </div>
    </div>
</header>

<!-- Уведомления -->
@if(session('success'))
    <div class="container">
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="container">
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

<!-- Контент -->
<main class="container">
    @yield('content')
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
