<main>

    <section id="jumbotron">
        <img src="../img/jumbotron.jpg" alt="">
    </section>

    <section id="comic-content">
        <div class="bluebar">
            <img src="{{$comics[0]['thumb']}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>{{$comics[0]['title']}}</h2>
                    <div class="info">
                        <div class="row">
                            <div class="col-9">
                                <p>U.S. Price: <span>$19.99</span></p>
                                <p>Avaible</p>
                            </div>
                            <div class="col-3">
                                <p>Check Availability</p>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>{{$comics[0]['description']}}</p>
                    </div>
                </div>
                <div class="col">
                    <div class="advertisement">
                        <p>Advertisement</p>
                        <img src="../img/adv.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id="specs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Talent</h3>
                    <div class="row">
                        <div class="col">
                            <p>Art by:</p>
                        </div>
                        <div class="col">
                            @foreach ($comics[0]['artists'] as $artist)
                                <p class="artist">{{$artist}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Written by:</p>
                        </div>
                        <div class="col">
                            @foreach ($comics[0]['writers'] as $writer)
                                <p class="artist">{{$writer}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>Specs</h3>
                    <div class="row">
                        <div class="col">
                            <p>Series:</p>
                        </div>
                        <div class="col">
                            <p class="artist">{{$comics[0]['series']}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>U.S. Price:</p>
                        </div>
                        <div class="col">
                            <p>{{$comics[0]['price']}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>On Sale Date:</p>
                        </div>
                        <div class="col">
                            <p>{{$comics[0]['sale_date']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>