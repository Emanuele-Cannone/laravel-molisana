<header>

    <img src="{{ asset('img/logo.png') }}" alt="logo">
    
    <nav>
        <ul class="option">
            <li><a href="{{ route('home') }}">home</a></li>
            <li><a href="{{ route('prodotti') }}">prodotti</a></li>
            <li><a href="{{ route('novita') }}">novità</a></li>
        </ul>
    </nav>
    <p>
        stai visualizzando: {{ Request::route()->getName() }}
    </p>
</header>