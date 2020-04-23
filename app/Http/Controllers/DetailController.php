<?php


namespace App\Http\Controllers;

use App\FavouriteList;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class DetailController extends Controller {
    public function indexById($id) {
        $apiKey = config('services.api.key');
        $url = "https://api.themoviedb.org/3/movie/{$id}?api_key={$apiKey}";
        $client = new \GuzzleHttp\Client();
        $res = $client->get($url);
        if ($res->getStatusCode() == 200) {
            $j = $res->getBody();
            $detailObject = json_decode($j);
            $user = Auth::user();
            if ($user != null) {
                $isFavourite = $this->isFavourite($user["id"], $id);
                return view('detailview', ["detailObject" => $detailObject, "isLoggedIn" => true, "isFavourite" => $isFavourite]);
            } else {
                return view('detailview', ["detailObject" => $detailObject, "isLoggedIn" => false]);
            }
        } else {
            return view('errorview');
        }
    }


    private function saveToFav($user_id, $movie_id) {
        $favMovie = new FavouriteList();
        $favMovie->movie_id = $movie_id;
        $favMovie->user_id = $user_id;
        if ($favMovie->save()) {
            return true;
        }
    }

    private function delete($id) {
        $favMovie = FavouriteList::findOrFail($id);

        $favMovie->delete();
    }

    private function isFavourite($userID, $movieID) {
        $model = FavouriteList::where('user_id', $userID)->where('movie_id', $movieID)->first();
//        Log::info($model);
        return $model!=null;
    }

    private function getFavouriteID($userID, $movieID) {
        $model = FavouriteList::where('user_id', $userID)->where('movie_id', $movieID)->first();
        return $model["id"];
    }

    public function favAction($movieID) {
        $user = Auth::user();
        if ($user != null) {
            $userID = $user["id"];
            $isFavourite = $this->isFavourite($userID, $movieID);
            $favouriteID = $this->getFavouriteID($userID, $movieID);
            if ($isFavourite == true) {

                $this->delete($favouriteID);
            } else {
                $this->saveToFav($userID, $movieID);
            }
        }
        return $this->indexById($movieID);
    }
}
