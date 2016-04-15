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

function write2file($array) {
	//$id = $array[0];
	$i = 0;
	$length = count($array) - 1;
	
	//$fx = fopen("../data/".$id.".txt", "w");
	$fx = fopen("../data/movie.txt", "w");
	for ( $i ; $i <= $length ; $i++) {
		fwrite($fx, $array[$i]);
		fwrite($fx, "\n");
	}
	fclose($fx);
    header('Location: ../results.php');
    exit;
}





/*
function get_tmdb_data($id) {
	$key = "d4472b0ed28d1f0b5703dffba7eb38f5";
	
	$url = "https://api.themoviedb.org/3/find/".$id."?external_source=imdb_id&api_key=".$key;
	
	$string = file_get_contents($url);
	$json = json_decode($string);
	
	$result = $json[0]->overview;
	echo $result;
}
*/



?>
