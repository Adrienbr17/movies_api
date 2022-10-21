<?php

$curl = curl_init("https://api.themoviedb.org/3/movie/550?api_key=7bb74f2d42661ca27974bf4224febecb");


$data = curl_exec($curl);
curl_close($curl);

$dataphp = json_decode($data, true);
echo "<pre>";
var_dump($dataphp);
echo "</pre>";