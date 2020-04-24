<?php


namespace App\Http\Controllers;


use App\FavouriteList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use stdClass;

class FavouriteListController
{

    public function index() {
        $user = Auth::user();
        if ($user != null) {
        $movieList = $this->getMovieList($user["id"]);
        return view("favouritelistview", ["movieList" => $movieList]);
        } else {
            return view("errorview");
        }
    }


    private function getMovieList($userID) {
        $model = FavouriteList::where('user_id', $userID)->get();
        $totalArray = array();


        foreach ($model as $favMovie){
            $movieID = $favMovie["movie_id"];
            $apiKey = config('services.api.key');
            $url = "https://api.themoviedb.org/3/movie/{$movieID}?api_key={$apiKey}";
            $client = new \GuzzleHttp\Client();
            $res = $client->get($url);
            if ($res->getStatusCode() == 200) {
                $j = $res->getBody();
                $detailObject = json_decode($j);
                array_push($totalArray, ["title" => $detailObject->title, "id" => $detailObject->id]);
            }
        }
        return $totalArray;
    }

}
