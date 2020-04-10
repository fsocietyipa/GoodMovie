<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class DetailController extends Controller {
    public function indexById($id) {
        $apiKey = config('services.api.key');
        $url = "https://api.themoviedb.org/3/movie/{$id}?api_key={$apiKey}";
        $client = new \GuzzleHttp\Client();
        $res = $client->get($url);
        if ($res->getStatusCode() == 200) {
            $j = $res->getBody();
            $detailObject = json_decode($j);
            return view('detailview', ["detailObject" => $detailObject]);
        } else {
            return view('errorview');
        }
    }
}
