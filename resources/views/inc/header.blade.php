<header class="p-3 mb-4 border-bottom bg-light">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-between">

        <!-- Логотип / Название сайта с иконкой и описанием -->
        <a href="{{ url('/') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <!-- SVG иконка капли воды -->
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0dcaf0" class="bi bi-droplet me-3" viewBox="0 0 16 16">
            <path d="M8 0c-.69 1.177-2.58 3.67-3.38 6.4A5.35 5.35 0 0 0 4.5 12.5c0 2.485 2.015 4.5 4.5 4.5s4.5-2.015 4.5-4.5a5.35 5.35 0 0 0-.12-1.85C10.58 3.67 8.69 1.177 8 0z"/>
          </svg>
          <div>
            <span class="fs-4 fw-bold">SuperWater2000+</span><br/>
            <small class="text-muted fst-italic">Tīrs ūdens ir dzīvības avots</small>
          </div>
        </a>

        <!-- Навигация -->
        <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0">
          <li>
            <a href="{{ url('/') }}" class="nav-link px-3 {{ request()->is('/') ? 'link-primary fw-bold' : 'link-dark' }}">
              Home
            </a>
          </li>

          @auth
            <li>
              <a href="{{ url('/data') }}" class="nav-link px-3 {{ request()->is('data*') ? 'link-primary fw-bold' : 'link-dark' }}">
                Data
              </a>
            </li>
          @endauth

          <li>
            <a href="{{ url('/contacts') }}" class="nav-link px-3 {{ request()->is('contacts') ? 'link-primary fw-bold' : 'link-dark' }}">
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
