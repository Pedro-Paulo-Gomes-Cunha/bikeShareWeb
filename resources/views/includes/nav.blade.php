<nav id="navbar" class="navbar">
    <ul>
        @can(auth()->user())
            <li><a class="active " href="{{ route('site.home') }}">Home</a></li>
        @endcan
        <li><a href="#funcionamento">Como funciona</a></li>
        <li><a href="#precos">Preços</a></li>
        @can(auth()->user())
            <li><a href="{{ route('login.logar') }}">Login</a></li>
        @endcan
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
