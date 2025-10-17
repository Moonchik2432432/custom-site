<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Header Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <header class="p-3 mb-4 border-bottom bg-light">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Logo">
              <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4">My Site</span>
          </a>

          <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="http://voronovs.test/" class="nav-link px-2 link-dark">Home</a></li>
            <li><a href="http://voronovs.test/data" class="nav-link px-2 link-dark">Data</a></li>
            <li><a href="http://voronovs.test/contacts" class="nav-link px-2 link-dark">Kontakts</a></li>
          </ul>

          <div class="text-end">
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-primary">Sign-up</button>
          </div>
        </div>
      </div>
    </header>

    <script>
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
          link.addEventListener('click', function (e) {
            // Убираем классы выделения у всех ссылок
            navLinks.forEach(nav => {
              nav.classList.remove('link-secondary');
              nav.classList.add('link-dark');
            });

            // Добавляем выделение текущей ссылке
            this.classList.remove('link-dark');
            this.classList.add('link-secondary');
          });
        });

        // Выделить активную ссылку на основе текущего URL
        const currentUrl = window.location.href;
        navLinks.forEach(link => {
          if (link.href === currentUrl) {
            link.classList.remove('link-dark');
            link.classList.add('link-secondary');
          }
        });
      </script>

  </body>
</html>
