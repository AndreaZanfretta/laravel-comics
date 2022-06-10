<main>

    <section id="jumbotron">
        <img src="../img/jumbotron.jpg" alt="">
    </section>

    <section id="black">
        <h2>Current Series</h2>
        <div class="content">
            @foreach ($comics as $comic)
                <section id="cards-container">
                    <div class="card">
                        <a href="{{route('comic')}}">
                            <img class="cover-image" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            <p class="title">{{$comic['title']}}</p>
                        </a>
                    </div>
                </section>
            @endforeach
        </div>
        <div class="load">
            <p>Load More</p>
        </div>
    </section>

    <section id="blue">
        <div class="container">
            <div class="card">
                <img src="../img/buy-comics-digital-comics.png" alt="">
                <p>Digital Comics</p>
            </div>
            <div class="card">
                <img src="../img/buy-comics-merchandise.png" alt="">
                <p>DC Merchandise</p>
            </div>
            <div class="card">
                <img src="../img/buy-comics-subscriptions.png" alt="">
                <p>Subscriptions</p>
            </div>
            <div class="card">
                <img src="../img/buy-comics-shop-locator.png" alt="">
                <p>Comic Shop Locator</p>
            </div>
            <div class="card">
                <img src="../img/buy-dc-power-visa.svg" alt="">
                <p>DC Power Visa</p>
            </div>
        </div>
    </section>

</main>