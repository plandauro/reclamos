<header>
    <h1>UNAB</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>
            <li><a href="{{route('reclamos.index')}}" class="{{request()->routeIs('reclamos.*') ? 'active' : ''}}">Reclamos</a>
            </li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.*') ? 'active' : ''}}">Contáctanos</a></li>
            <li><a href="">Login</a></li>
        </ul>
    </nav>
</header>