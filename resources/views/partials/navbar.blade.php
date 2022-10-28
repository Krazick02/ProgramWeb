<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('users.index') }}">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('clients.index') }}">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('users.create') }}">Crear usuario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('clients.create') }}">Crear cliente</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
