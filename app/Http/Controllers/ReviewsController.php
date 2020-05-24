<?php


namespace App\Http\Controllers;


class ReviewsController
{
    public function indexById($id) {
        $apiKey = config('services.api.key');
        $url = "https://api.themoviedb.org/3/movie/{$id}/reviews?api_key={$apiKey}";
        $client = new \GuzzleHttp\Client();
        $res = $client->get($url);
        if ($res->getStatusCode() == 200) {
            $j = $res->getBody();
            $reviewObject = json_decode($j);
            return view('reviewsview', ["reviewObject" => $reviewObject]);
        } else {
            return view('errorview');
        }
    }
}
