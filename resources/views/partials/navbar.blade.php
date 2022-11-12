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

        @if (isset(Auth::user()->name))
            <li>{{ Auth::user()->name }}

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @else
                <li>
                  <a class="nav-link active" href="{{ route('login') }}">Sing in</a>
              </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
