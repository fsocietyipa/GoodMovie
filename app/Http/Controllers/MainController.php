<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class MainController extends Controller
{
    public function index() {
        $apiKey = config('services.api.key');
        $url = "https://api.themoviedb.org/3/movie/upcoming?api_key={$apiKey}";
        $client = new \GuzzleHttp\Client();
        $res = $client->get($url);
        if ($res->getStatusCode() == 200) {
            $j = $res->getBody();
            $movieObject = json_decode($j);
            return view('moviesview', ["movieObject" => $movieObject, "currentPage" => 1]);
        } else {
            return view('errorview');
        }
    }

    public function indexByPage($page) {
        $apiKey = config('services.api.key');
        $url = "https://api.themoviedb.org/3/movie/upcoming?api_key={$apiKey}&page={$page}";
        $client = new \GuzzleHttp\Client();
        $res = $client->get($url);
        if ($res->getStatusCode() == 200) {
            $j = $res->getBody();
            $obj = json_decode($j);
            return view('moviesview', ["movieObject" => $obj, "currentPage" => $page]);
        } else {
            return view('errorview');
        }
    }
}