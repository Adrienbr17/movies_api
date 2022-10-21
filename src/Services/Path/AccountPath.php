<?php

namespace App\Services\Path;

use App\Services\ApiKey;

class AccountPath
{

    public function __construct()
    {
        $this->apiKey = new ApiKey();
    }

    public function getPath($id = null) {
        return [
            "details" => "https://api.themoviedb.org/3/account?api_key=".$this->apiKey->getKey(),
            "mark_favorites" => "https://api.themoviedb.org/3/account/".$id."/favorite?api_key=".$this->apiKey->getKey(),
            "favorite_movies" => "https://api.themoviedb.org/3/account/".$id."/favorite/movies?api_key=".$this->apiKey->getKey()."&language=fr-Fr",
        ];
    }
}