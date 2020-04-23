<h1>Favourites list</h1>
@foreach($movieList as $movie)
    <a href="/details/{{$movie["id"]}}">
        <p>{{$movie["title"]}}</p>
    </a>
    <br>
@endforeach
