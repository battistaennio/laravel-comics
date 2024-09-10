@php
    $menu = config('menu');
@endphp

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

                @foreach ($menu as $name)
                    <li>
                        <a href="{{ route($name) }}"
                            class="{{ Route::currentRouteName() === $name ? 'active' : '' }}">{{ $name }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>

    <div id="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
    </div>

</header>
