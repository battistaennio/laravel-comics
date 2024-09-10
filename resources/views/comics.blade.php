{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <h2>current series</h2>

            <div class="cards-container">

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="details.series">
                    </div>
                    <h3> Action Comics </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg"
                            alt="details.series">
                    </div>
                    <h3> American Vampire 1976 </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg"
                            alt="details.series">
                    </div>
                    <h3> Aquaman </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg" alt="details.series">
                    </div>
                    <h3> Batgirl </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://static.posters.cz/image/750/locandine-film-in-plexiglass-batman-prowl-comic-cover-i69653.jpg"
                            alt="details.series">
                    </div>
                    <h3> Batman </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://static.wikia.nocookie.net/marvel_dc/images/5/50/Batman_Beyond_v.1_1.jpg"
                            alt="details.series">
                    </div>
                    <h3> Batman Beyond </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg"
                            alt="details.series">
                    </div>
                    <h3> Batman/Superman </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Annual_Vol_2_1.jpg"
                            alt="details.series">
                    </div>
                    <h3> Batman/Superman Annual </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://static.wikia.nocookie.net/marvel_dc/images/5/54/Batman_The_Joker_War_Zone_Vol_1_1.jpg"
                            alt="details.series">
                    </div>
                    <h3> Batman: The Joker War Zone </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg"
                            alt="details.series">
                    </div>
                    <h3> Batman: Three Jokers </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://static.wikia.nocookie.net/marvel_dc/images/f/f8/Batman_White_Knight_Presents_Harley_Quinn_Vol_1_1.jpg"
                            alt="details.series">
                    </div>
                    <h3> Batman: White Knight Presents: Harley Quinn </h3>
                </div>

                <div class="comic-card">
                    <div class="img-container">
                        <img src="https://static.wikia.nocookie.net/marvel_dc/images/c/c8/Catwoman_Vol_2_1.jpg"
                            alt="details.series">
                    </div>
                    <h3> Catwoman </h3>
                </div>

            </div>
        </div>
    </main>
@endsection


@section('titlePage')
    Comics
@endsection
