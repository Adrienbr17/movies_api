<?php
namespace App\Services\Path;

use App\Services\ApiKey;

class MoviesPath
{

    public function __construct()
    {
        $this->apiKey = new ApiKey();
    }


    public function GetPath($id = null)
    {
        return [
            "details" => "https://api.themoviedb.org/3/movie/".$id."?api_key=" . $this->apiKey->getKey(),
            "credits" => "https://api.themoviedb.org/3/movie/$id/credits?api_key=" . $this->apiKey->getKey(),
            "images" =>  "https://api.themoviedb.org/3/movie/$id/images?api_key=".$this->apiKey->getKey(),
            "recommendation" => "https://api.themoviedb.org/3/movie/".$id."/recommendations?api_key=".$this->apiKey->getKey(),
            "top_rated" => " https://api.themoviedb.org/3/movie/top_rated?api_key=".$this->apiKey->getKey(),
            "translation" => "https://api.themoviedb.org/3/movie/".$id."/translations?api_key=".$this->apiKey->getKey(),
            "rate_movie" => "https://api.themoviedb.org/3/movie/".$id."/rating?api_key=".$this->apiKey->getKey()

        ];
    }
}
