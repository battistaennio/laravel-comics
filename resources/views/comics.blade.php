{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <h2>current series</h2>

            <div class="cards-container">

                @foreach ($comicsList as $comic)
                    <div class="comic-card">
                        <div class="img-container">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>
                        <h3> {{ $comic['series'] }} </h3>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
@endsection


@section('titlePage')
    Comics
@endsection
