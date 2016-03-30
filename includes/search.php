<?php

$a = $_GET["name"];
$b = $_GET["year"];

function get_movie_data($movie, $year){
    $movieName = str_replace(' ', '+', $movie);
    
    $string = file_get_contents("http://www.omdbapi.com/?t=".$movieName."&y=" .$year."&plot=long&r=json");
    $json = json_decode($string);

    $imdbID = $json->imdbID;
    $title = $json->Title;
    $released = $json->Released;
    $genre = $json->Genre;
    $plot = $json->Plot;
    $poster = $json->Poster;
	
	$data = [$imdbID, $title, $released, $genre, $plot, $poster];
			//   0      1         2         3       4       5 
	return $data;
}

function get_tmdb_data($id) {
	$key = "d4472b0ed28d1f0b5703dffba7eb38f5";
	
	$url = "https://api.themoviedb.org/3/find/".$id."?external_source=imdb_id&api_key=".$key;
	
	$string = file_get_contents($url);
	echo $string;
	$json = json_decode($string);
	echo $json;
	
	$result = $json->movie_results;
	echo $result;
}




get_imdb_id($a, $b);


?>
