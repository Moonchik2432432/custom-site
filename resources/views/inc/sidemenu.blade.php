<nav class="sidebar d-flex flex-column">
    <a href="/" class="d-flex align-items-center mb-3 text-decoration-none fs-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 16">
        <path d="M5.062 12.1H6.5v1.3H5.062v-1.3zm0-6.5H6.5v1.3H5.062v-1.3zm4.938 3.25H7.4v1.3h2.6v-1.3z"/>
      </svg>
      <span class="ms-2">Sidebar</span>
    </a>

    <hr />

    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/" class="nav-link">Maja</a>
      </li>

      @auth
      <li>
        <a href="/data" class="nav-link">Data</a>
      </li>
      @endauth

      <li>
        <a href="/contacts" class="nav-link">Kontakts</a>
      </li>
    </ul>

    <hr />

    <div class="dropdown">
      @auth
      <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2" />
        <strong>{{ Auth::user()->name }}</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser">
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider" /></li>
        <li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="dropdown-item" type="submit">Sign out</button>
          </form>
        </li>
      </ul>
      @else
      <a href="/login" class="btn btn-outline-primary">Login</a>
      @endauth
    </div>
</nav>
