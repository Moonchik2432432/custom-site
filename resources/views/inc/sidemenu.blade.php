<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Header Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

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
        <a href="/" class="nav-link active" aria-current="page">Maja</a>
      </li>
      <li>
        <a href="{{ url('/data') }}" class="nav-link {{ request()->is('data*') ? 'link-secondary' : 'link-dark' }}">
            Data
        </a>
      </li>
      <li>
        <a href="/contacts" class="nav-link">Kontakts</a>
      </li>
    </ul>
    <hr />
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2" />
        <strong>User</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser">
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider" /></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </nav>

  <script>
    const navLinks = document.querySelectorAll('.nav-link');

    // Удалить класс .active у всех
    function clearActiveLinks() {
      navLinks.forEach(link => link.classList.remove('active'));
    }

    // Добавить активный класс по текущему пути
    const currentPath = window.location.pathname;

    navLinks.forEach(link => {
      const linkPath = new URL(link.href).pathname;

      if (linkPath === currentPath) {
        clearActiveLinks();
        link.classList.add('active');
      }

      // Добавляем обработчик клика
      link.addEventListener('click', function () {
        clearActiveLinks();
        this.classList.add('active');
      });
    });
  </script>
  </body>
  </html>

