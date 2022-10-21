<?php
namespace App\Services\Path;

use App\Services\ApiKey;

class CollectionPath {

    public function __construct()
    {
        $this->apiKey = new ApiKey();
    }

    public function GetPath($id) {
        return [
            "details" => "https://api.themoviedb.org/3/collection/".$id."?api_key=".$this->apiKey->getKey(),
            "images" => "https://api.themoviedb.org/3/collection/".$id."/images?api_key=".$this->apiKey->getKey(),
            "translation" => "https://api.themoviedb.org/3/collection/".$id."/translations?api_key=".$this->apiKey->getKey()."&language=fr-FR"
        ];
    }
}