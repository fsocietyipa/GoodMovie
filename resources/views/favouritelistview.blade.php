<link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
{{--<h1>Favourites list</h1>--}}

{{--@foreach($movieList as $movie)--}}
{{--    <dd><a href="/details/{{$movie["id"]}}">--}}
{{--        <p>{{$movie["title"]}}</p>--}}
{{--    </a></dd>--}}
{{--    <br>--}}
{{--@endforeach--}}
<dl class="list maki">
    <dt>Favourite list</dt>
    @foreach($movieList as $movie)
        <dd><a href="/details/{{$movie["id"]}}">
                {{$movie["title"]}}
            </a></dd>
    @endforeach
</dl>
<style>
    html, body {
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: antialiased;
        background: #ffffff;
        font-family: 'Days One', sans-serif;
        overflow: hidden;
        padding: 0;
        margin: 0;
        height: 100%;
    }

    .list {

        -webkit-transform-style: preserve-3d;
        -moz-transform-stle: preserve-3d;
        -ms-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;

        text-transform: uppercase;
        position: absolute;
        margin-left: -140px;
        top: 20%;
    }

    .list a {
        display: block;
        color: #fff;
        text-decoration: none;
        font-weight: 700;
        font-family: 'Days One', sans-serif;
    }

    .list a:hover {
        text-indent: 20px;
    }

    .list dt, .list dd {

        text-indent: 10px;
        line-height: 55px;
        background: black;
        margin: 0;
        height: 55px;
        width: 270px;
        color: #fff;
    }

    .list dt {

        /* Since we're hiding elements behind here, we need it in 3d */
        -webkit-transform: translateZ(0.3px);
        -moz-transform: translateZ(0.3px);
        -ms-transform: translateZ(0.3px);
        -o-transform: translateZ(0.3px);
        transform: translateZ(0.3px);

        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        font-size: 15px;
    }

    .list dd {

        border-top: 1px dashed rgba(255,255,255,0.3);
        line-height: 35px;
        font-size: 11px;
        height: 35px;
        margin: 0;
    }
    .maki {

        -webkit-transform: perspective(600px) translateZ(1px) !important;
        -moz-transform: perspective(600px) translateZ(1px) !important;
        -ms-transform: perspective(600px) translateZ(1px) !important;
        -o-transform: perspective(600px) translateZ(1px) !important;
        transform: perspective(600px) translateZ(1px) !important;

        left: 50%;
    }

    .sashimi {

        -webkit-transform: perspective(1200px) rotateY(-40deg) !important;
        -moz-transform: perspective(1200px) rotateY(-40deg) !important;
        -ms-transform: perspective(1200px) rotateY(-40deg) !important;
        -o-transform: perspective(1200px) rotateY(-40deg) !important;
        transform: perspective(1200px) rotateY(-40deg) !important;

        -webkit-transform-origin: -10% 25%;
        -moz-transform-origin: -10% 25%;
        -ms-transform-origin: -10% 25%;
        -o-transform-origin: -10% 25%;
        transform-origin: -10% 25%;

        left: 80%;
    }
</style>
