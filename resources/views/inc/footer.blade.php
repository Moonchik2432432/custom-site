<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; 2025 Company, Inc</p>

      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>

        @auth
          <li class="nav-item"><a href="/data" class="nav-link px-2 text-muted">Data</a></li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-link nav-link px-2 text-muted" style="display:inline; padding:0; border:none; background:none; cursor:pointer;">Logout</button>
            </form>
          </li>
        @endauth

        @guest
          <li class="nav-item"><a href="{{ route('login') }}" class="nav-link px-2 text-muted">Login</a></li>
          <li class="nav-item"><a href="{{ route('register') }}" class="nav-link px-2 text-muted">Register</a></li>
        @endguest

        <li class="nav-item"><a href="/contacts" class="nav-link px-2 text-muted">Kontakts</a></li>
      </ul>
    </footer>
  </div>
