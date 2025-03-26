<header>
    <nav class="container d-flex justify-content-between align-items-center">

        <div class="py-3">
            <a href={{ route('home') }}><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC"
                    class="header-logo py-2"></a>
        </div>

        <div>
            <ul class="d-flex list-unstyled py-3">
                <li class="px-3">
                    <a href="{{ route('characters') }}" class="{{ Request::routeIs('characters') ? 'active' : '' }}">
                        CHARACTERS
                    </a>
                </li>
                <li class="px-3">
                    <a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">
                        COMICS
                    </a>
                </li>
                <li class="px-3">
                    <a href="{{ route('movies') }}" class="{{ Request::routeIs('movies') ? 'active' : '' }}">
                        MOVIES
                    </a>
                </li>
                <li class="px-3">
                    <a href="{{ route('tv') }}" class="{{ Request::routeIs('tv') ? 'active' : '' }}">
                        TV
                    </a>
                </li>
                <li class="px-3">
                    <a href="{{ route('games') }}" class="{{ Request::routeIs('games') ? 'active' : '' }}">
                        GAMES
                    </a>
                </li>
                <li class="px-3">
                    <a href="{{ route('collectibles') }}"
                        class="{{ Request::routeIs('collectibles') ? 'active' : '' }}">
                        COLLECTIBLES
                    </a </li>
                <li class="px-3">
                    <a href="{{ route('videos') }}" class="{{ Request::routeIs('videos') ? 'active' : '' }}">
                        VIDEOS
                    </a>
                </li>
                <li class="px-3">
                    <a href="{{ route('fans') }}" class="{{ Request::routeIs('fans') ? 'active' : '' }}">
                        FANS
                    </a>
                </li>
                <li class="px-3">
                    <a href="{{ route('news') }}" class="{{ Request::routeIs('news') ? 'active' : '' }}">
                        NEWS
                    </a>
                </li>
                <li class="px-3">
                    <a href="{{ route('shop') }}" class="{{ Request::routeIs('shop') ? 'active' : '' }}">
                        SHOP
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
