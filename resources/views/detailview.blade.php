
<link rel="stylesheet" href="/css/app.css">

<style>
    .hero:before {
        background: url("https://image.tmdb.org/t/p/w780{{$detailObject->backdrop_path}}");
        display: flex;
        justify-content: center;
        height: 400px;
        overflow: hidden;
    }
    img {
        flex: none;
    }
    .compNames {
        padding: 10px;
    }
</style>

<div class="movie-card">

    <div class="container">

        <a href="#"><img  width=200 height=300 src="https://image.tmdb.org/t/p/original/{{$detailObject->poster_path}}" alt="cover" class="cover" /></a>

        <div class="hero">

            <div class="details">
                @if($detailObject->adult == true)
                    <div class="title1">{{$detailObject->title}}<span>18+</span></div>
                @else
                    <div class="title1">{{$detailObject->title}}</div>
                @endif
                    <div class="title2">{{$detailObject->tagline}}</div>

                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4" checked /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>

                <span class="likes">{{$detailObject->vote_count}} votes</span>

            </div>

        </div>

        <div class="description">

            <div class="column1">
                @foreach ($detailObject->genres as $genre)
                    <span class="tag">{{$genre->name}}</span>
                @endforeach
            </div>

            <div class="column2">

                <p>{{$detailObject->overview}}</p>

                <div class="avatars">
                    @foreach($detailObject->production_companies as $comp)
                        <a data-tooltip="{{$comp->name}}" data-placement="top" class="compNames">
                            <img width="70" height="30" src="https://image.tmdb.org/t/p/w154{{$comp->logo_path}}"/>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
</div>

