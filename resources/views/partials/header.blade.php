<header>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo">
                    </a>
                </li>
            </ul>

            <ul class="nav">
                <li>
                    <a href="{{ route('characters') }}" class="">characters</a>
                </li>

                <li>
                    <a href="{{ route('comics') }}" class="">comics</a>
                </li>

                <li>
                    <a href="{{ route('movies') }}" class="">movies</a>
                </li>

                <li>
                    <a href="{{ route('tv') }}" class="">tv</a>
                </li>

                <li>
                    <a href="{{ route('games') }}" class="">games</a>
                </li>

                <li>
                    <a href="{{ route('collectibles') }}" class="">collectibles</a>
                </li>

                <li>
                    <a href="{{ route('videos') }}" class="">videos</a>
                </li>

                <li>
                    <a href="{{ route('fans') }}" class="">fans</a>
                </li>

                <li>
                    <a href="{{ route('news') }}" class="">news</a>
                </li>

                <li>
                    <a href="{{ route('shop') }}" class="">shop</a>
                </li>
            </ul>
        </nav>
    </div>

    <div id="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
    </div>

</header>
