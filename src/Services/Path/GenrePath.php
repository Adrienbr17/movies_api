<?php

namespace App\Services\Path;

use App\Services\ApiKey;

class GenrePath
{

    public function __construct()
    {
        $this->apiKey = new ApiKey();
    }

    public function GetPath($id = null)
    {
        return [
            "genre_movies" => "https://api.themoviedb.org/3/genre/movie/list?api_key=<<api_key>>&language=fr-Fr"
        ];
    }
}
