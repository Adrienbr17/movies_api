<?php

use App\Services\ApiKey;

class MovieModel {

    public function __construct() {
        $this->apiKey = new ApiKey();
    }
    public function GetDetails($movieId) {
        return "https://api.themoviedb.org/3/movie/".$movieId."?api_key=".$this->apiKey->getKey();
    }
}