<?php

$a = $_GET["name"];
$b = $_GET["year"];

function get_imdb_id($movie, $year){
    $movieName = str_replace(' ', '+', $movie);
    
    $string = file_get_contents("http://www.omdbapi.com/?t=".$movieName."&y=" .$year."&plot=short&r=json");
    $json = json_decode($string);

    $result = $json->imdbID;
    echo $result;

}

get_imdb_id($a, $b);

?>
