<?php 
	include("includes/search.php");  
	$return = get_movie_data($a, $b);
	$movieName = urlencode($a);	
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie Tweets</title>

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/pure.min.css">
    <link rel="stylesheet" href="css/grids-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <div class="rheader">
        <div class="title">
            <h1>movietweets</h1>
        </div>
        
        <div class="button">
            <a href="page_index.php" class="pure-button pure-button-primary">New Search</a>
        </div>
    </div>
    
    <div id="wrapper">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-2" id="details">
                <div class="rcontent">
                    <img id="poster" src="<?php print($return[5]); ?>" alt="poster">
                    <h2 class="section">Title:</h2><p id="title"><?php print($return[1]); ?></p><br>
                    <h3 class="section">Release Date:</h3><p id="release"><?php print($return[2]); ?></p><br>
                    <h3 class="section">Genres:</h3><p id="genres"><?php print($return[3]); ?></p><br>
                    <h3 class="section">Plot:</h3><p id="plot"><?php print($return[4]); ?></p><br>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-2" id="tweets">
                <div class="rcontent">
                    <?php
                    include("includes/authenticate.php");
                    $statuses = $connection->get("search/tweets", ["q" => $return[1], "count" => 25, "lang" => "en"]);
                    $array = objectToArray( $statuses );

                    $count = sizeof($array);
                    
                    
                    for ( $i=0 ; $i <= $count ; $i++ ) {
	                    echo "<br>";
	                    echo "<h3 class='handle'>";
	                    print($array['statuses'][$i]['user']['screen_name']);
	                    echo "</h3><br>";
	                    echo "<p class='tweet_date'>";
	                    $sub1 = substr($array['statuses'][$i]['created_at'], 0, 16);
	                    $sub2 = substr($sub1, 12, 2);
	                    
	                    if ($sub2 >= 12) { 
		                    $sub2 -= 12; 
		                }
	                    print($sub1);
	                    echo "</p><br>";
	                    echo "<p class='tweet_text'>";
	                    print($array['statuses'][$i]['text']);
	                    echo "</p>";
                    }
	                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="rfooter">
        Made with <i class="fa fa-heart"></i> by Alex Crocker
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>