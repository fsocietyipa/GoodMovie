<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

<div class="like-content">
  <span>
    @foreach ($reviewObject->results as $review)
        <div class="review">
            <div class="author">{{$review->author}}</div>
            <div class="content">{{$review->content}}</div>
        </div>
          <br>
      @endforeach
  </span>
</div>
<style>
    .review {
        background: whitesmoke;
        padding: 10px;
        border-radius: 10px;
        width: 50%;
    }
    .author {
        font-size: 20px;
        color: black;
        font-family: "Oswald", sans-serif;
        text-align: start;
        text-transform: uppercase;
        margin-bottom: 10px;
    }
    .content {
        font-size: 15px;
        color: black;
        font-family: 'Open Sans Condensed', sans-serif;
        text-align: justify;

    }
    .like-content {
        display: inline-block;
        width: 100%;
        margin: -20px 0 0;
        padding: 40px 0 0;
        font-size: 18px;
        text-align: -webkit-center;
    }
    .like-content span {
        color: #9d9da4;
        font-family: monospace;
    }
    .like-content .btn-secondary {
        display: block;
        margin: 40px auto 0px;
        text-align: center;
        background: #ed2553;
        border-radius: 3px;
        box-shadow: 0 10px 20px -8px rgb(240, 75, 113);
        padding: 10px 17px;
        font-size: 18px;
        cursor: pointer;
        border: none;
        outline: none;
        color: #ffffff;
        text-decoration: none;
        -webkit-transition: 0.3s ease;
        transition: 0.3s ease;
    }
    .like-content .btn-secondary:hover {
        transform: translateY(-3px);
    }
    .like-content .btn-secondary .fa {
        margin-right: 5px;
    }
    .animate-like {
        animation-name: likeAnimation;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-duration: 0.65s;
    }
    @keyframes likeAnimation {
        0%   { transform: scale(30); }
        100% { transform: scale(1); }
    }
</style>
