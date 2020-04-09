{{--<div class="links">--}}
{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">Poster</th>--}}
{{--                <th scope="col">Overview</th>--}}
{{--                <th scope="col">Vote Average</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach ($movieObject->results as $movie)--}}
{{--                <tr>--}}
{{--                    <th scope="row">--}}
{{--                        <img width=220 height=330 src="https://image.tmdb.org/t/p/w440_and_h660_face{{ $movie->poster_path }}">--}}
{{--                    </th>--}}
{{--                    <td>{{ $movie->title }} \n {{ $movie->overview }}</td>--}}
{{--                    <td>{{ $movie->vote_average }}</td>--}}
{{--                </tr>--}}

{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--</div>--}}



<div class="movie-list">
    <div class="title-bar">
        <div class="left">
            <p class="bold">Upcoming movies</p>
        </div>
        <div class="right">
            <a href="register">Register</a>
            <a class="blue1" href="login">Login</a>
        </div>
    </div>
</div>
<ul class="list">
    @foreach ($movieObject->results as $movie)
        <li>
            <img width=220 height=330 src="https://image.tmdb.org/t/p/w440_and_h660_face{{ $movie->poster_path }}" alt="" class="cover" />
            <p class="title">{{ $movie->title }}</p>
{{--            <p class="genre">{{ $movie->original_language }}</p>--}}
        </li>
    @endforeach

</ul>
@if ($currentPage == 1)
    @if ($currentPage < $movieObject->total_pages)
        <a href="/page/{{$currentPage+1}}">Next</a>
    @endif

    @else
        @if ($currentPage == $movieObject->total_pages)
            <a href="/page/{{$currentPage-1}}">Prev</a>
        @else
            <a href="/page/{{$currentPage-1}}">Prev</a>
            <a href="/page/{{$currentPage+1}}">Next</a>
        @endif
@endif



<style>
    @import url(https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

    ul {
        list-style-type: none;
    }

    .title-bar {
        padding: 20px;
        border-bottom: 1px solid #DDD;
        overflow: hidden;
    }
    .left {
        float: left;
        font-size: 15px;
        text-transform: uppercase;
    }
    .grey {
        color: #999;
    }

    .bold {
        font-weight: bold;
        font-size: 20px;
    }

    p {
        display: inline-block;
        word-break: break-all;
        margin-right: 10px;
    }


    .right {
        float: right;
    }
    a {
        color: #999;
        margin-left: 10px;
    }
    a.blue1 {
        color: #279CEB;
    }

    .list {
        margin: 20px;
        margin-right: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
    }
    li:hover:after {
        opacity: 1;
    }

    li:after {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 330px;
        content: '\f144';
        background: rgba(0,0,0,.3);
        border-radius: 10px;
        opacity: 0;
        color: #FFF;
        font-size: 40px;
        display: block;
        cursor: pointer;
        line-height: 330px;
        text-align: center;
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        -webkit-font-smoothing: antialiased;
    }
    li {
        flex: 0 0 130px;
        padding-bottom: 30px;
        margin-right: 20px;
        position: relative;
    }


    img {
        width: 220px;
        height: 330px;
        display: block;
        margin: 0 auto 5px auto;
        cursor: pointer;
        border-radius: 10px;
    }

    .title, .genre {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
    }

    .title {
        font-weight: bold;
        font-size: 60%;
        margin-bottom: 4px;
    }

    .genre {
        color: #999;
        font-size: 12px;
    }
</style>
