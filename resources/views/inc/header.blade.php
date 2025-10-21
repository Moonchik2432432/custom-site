<header class="p-3 mb-4 border-bottom bg-light">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <!-- Логотип / Название сайта -->
            <a href="{{ url('/') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <span class="fs-4">My Site</span>
            </a>

            <!-- Навигация -->
            <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="{{ url('/') }}" class="nav-link px-2 {{ request()->is('/') ? 'link-secondary' : 'link-dark' }}">
                        Home
                    </a>
                </li>

                @auth
                    <li>
                        <a href="{{ url('/data') }}" class="nav-link px-2 {{ request()->is('data*') ? 'link-secondary' : 'link-dark' }}">
                            Data
                        </a>
                    </li>
                @endauth

                <li>
                    <a href="{{ url('/contacts') }}" class="nav-link px-2 {{ request()->is('contacts') ? 'link-secondary' : 'link-dark' }}">
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
                    <a href="{{ route('register') }}" class="btn btn-primary">Sign-up</a>
                @endauth
            </div>
        </div>
    </div>
</header>
