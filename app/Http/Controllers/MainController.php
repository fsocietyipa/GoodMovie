<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use \Cache;
use Log;

class MainController extends Controller
{
    public function index()
    {
        $minutes = 60;
        $movieObject = Cache::remember('request', $minutes, function () {
            Log::info("Not from cache");
            $url = "https://api.themoviedb.org/3/movie/upcoming?api_key=b0059d0925aeb81024bf0d7251c3eefc";
            Log::info($url);
            $client = new \GuzzleHttp\Client();
            $res = $client->get($url);
            if ($res->getStatusCode() == 200) {
                $j = $res->getBody();
                $obj = json_decode($j);
                $movieObject = $obj;
            }
            return $movieObject;
        });
        return view('moviesview', ["movieObject" => $movieObject]);
    }
}
