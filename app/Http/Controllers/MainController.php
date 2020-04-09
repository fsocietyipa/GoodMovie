<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class MainController extends Controller
{
    public function index() {
        $url = "https://api.themoviedb.org/3/movie/upcoming?api_key=b0059d0925aeb81024bf0d7251c3eefc";
        $client = new \GuzzleHttp\Client();
        $res = $client->get($url);
        if ($res->getStatusCode() == 200) {
            $j = $res->getBody();
            $movieObject = json_decode($j);
            return view('moviesview', ["movieObject" => $movieObject, "currentPage" => 1]);
        }
    }

    public function indexByPage($page) {
        $url = "https://api.themoviedb.org/3/movie/upcoming?api_key=b0059d0925aeb81024bf0d7251c3eefc&page={$page}";
        $client = new \GuzzleHttp\Client();
        $res = $client->get($url);
        if ($res->getStatusCode() == 200) {
            $j = $res->getBody();
            $obj = json_decode($j);
            return view('moviesview', ["movieObject" => $obj, "currentPage" => $page]);
        }
    }
}
