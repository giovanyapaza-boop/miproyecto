<header class="header" id="inicio">

    <div class="menu container">

        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('image/logo1.png') }}" alt="Logo de Importadora Gikar">
        </a>

        <input type="checkbox" id="menu">
        <label for="menu" class="menu-label">
            <img src="{{ asset('image/menu.png') }}" class="menu-icono" alt="Abrir menú">
        </label>

                <nav class="navbar">
            <ul>
                <li><a href="{{ route('home') }}#inicio">Inicio</a></li>
                <li><a href="{{ route('home') }}#lista-1">Catálogo</a></li>
                <li><a href="{{ route('home') }}#nosotros">Nosotros</a></li>
                <li><a href="{{ route('home') }}#contacto">Contacto</a></li>
                
                @guest
                    <li><a href="{{ route('login') }}" class="nav-especial">Login</a></li>
                @endguest

                    @auth
                        <li><a href="{{ route('admin.mensajes') }}" class="nav-especial">Mensajes</a></li>
                        <li><a href="{{ route('admin.productos.index') }}" class="nav-especial">Productos</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                                <button type="submit" class="btn-logout">Salir</button>
                            </form>
                        </li>
                    @endauth
            </ul>
        </nav>
    </div>

</header>