<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class DetailController extends Controller {
    public function indexById($id) {
        $url = "https://api.themoviedb.org/3/movie/{$id}?api_key=b0059d0925aeb81024bf0d7251c3eefc&page";
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
