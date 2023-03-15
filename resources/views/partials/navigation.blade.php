@yield('navbar')

<header>
       
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{route('inicio')}}">
                <img src="https://logospng.org/download/carrefour/logo-carrefour-512.png" alt="" height="50">
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon">

                </span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="navbar-item"><a class="nav-link" href="{{route('inicio')}}">Inicio</a></li>
                    <li class="navbar-item"><a class="nav-link" href="{{route('productos.index')}}">Productos</a></li>
                    <li class="navbar-item"><a class="nav-link" href="{{route('contacto')}}">Contacto</a></li>
                </ul>
            </div>
        </div>
        
    </nav>

</header>