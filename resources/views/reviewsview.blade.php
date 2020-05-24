@foreach ($reviewObject->results as $review)
    <p>{{$review->author}}</p>
    <p>{{$review->content}}</p>
    <p>{{$review->id}}</p>
    <p>{{$review->url}}</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endforeach
