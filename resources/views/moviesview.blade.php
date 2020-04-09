<div class="links">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Poster</th>
                <th scope="col">Overview</th>
                <th scope="col">Vote Average</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($movieObject->results as $movie)
                <tr>
                    <th scope="row">
                        <img width=440 height=660 src="https://image.tmdb.org/t/p/w440_and_h660_face{{ $movie->poster_path }}">
                    </th>
                    <td>{{ $movie->title }} \n {{ $movie->overview }}</td>
                    <td>{{ $movie->vote_average }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
</div>
