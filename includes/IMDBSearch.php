<?php

class IMDBSearch {
    public static function _movieRedirect($movie, $year) {
        $movieName = str_replace(' ', '+', $movie);

        $page = @file_get_contents( 'http://www.imdb.com/find?s=all&q='. $movieName. ' ('.$year.')');
        if(@preg_match('^href="\/title\/(t{2}\d{7})\/\?ref_=fn_al_tt_1"\s>$', $page, $matches)) {
            $rawData = @file_get_contents( 'http://www.imdb.com/title/'. $matches[1]);
        }
        else {
            $rawData = @file_get_contents( 'http://www.imdb.com/find?s=all&q='. $movieName. ' ('.$year.')');
        }
        return $rawData;
    }
}

?>