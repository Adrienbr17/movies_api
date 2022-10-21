<?php

namespace App\Services\Path;

use App\Services\ApiKey;

class AuthenticationPath
{

    public function __construct()
    {
        $this->apiKey = new ApiKey();
    }


    public function GetPath($id = null)
    {
        return [
            "create_guest_session" => "https://api.themoviedb.org/3/authentication/guest_session/new?api_key=".$this->apiKey->getKey(),
            "create_request_token" => "https://api.themoviedb.org/3/authentication/token/new?api_key=".$this->apiKey->getKey(),
            "create_session" => " https://api.themoviedb.org/3/authentication/session/new?api_key=".$this->apiKey->getKey(),
            "create_session_with_login" => "https://api.themoviedb.org/3/authentication/token/validate_with_login?api_key=".$this->apiKey->getKey(),
            "delete_session" => "https://api.themoviedb.org/3/authentication/session?api_key=".$this->apiKey->getKey()
        ];
    }
}
