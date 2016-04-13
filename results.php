<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TV Tweets</title>

    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/pure.min.css">
    <link rel="stylesheet" href="css/grids-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <div class="rheader">
        <div class="title">
            <h1>tvtweets</h1>
        </div>
        
        <div class="button">
            <a href="page_index.php" class="pure-button pure-button-primary">New Search</a>
        </div>
    </div>
    
    <div id="wrapper">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-2" id="details">
                <div class="rcontent">
                    <img id="poster" src="http://ia.media-imdb.com/images/M/MV5BMTYyMzM3MzgyNV5BMl5BanBnXkFtZTcwMTI4MzUyMQ@@._V1_SX300.jpg" alt="poster">
                    <h2 class="section">Title:</h2><p id="title">Big Fish</p><br>
                    <h3 class="section">Release Date:</h3><p id="release">09 Jan 2004</p><br>
                    <h3 class="section">Genres:</h3><p id="genres">Adventure, Drama, Fantasy</p><br>
                    <h3 class="section">Plot:</h3><p id="plot">A frustrated son tries to determine the fact from fiction in his dying father's life.</p><br>
                </div>
            </div>

            <div class="pure-u-1 pure-u-md-1-2" id="tweets">
                <div class="rcontent">
                    <?php
                    //include("includes/authenticate.php");
                    //$statuses = $connection->get("search/tweets", ["q" => "movie"]);
                    //$array = objectToArray( $statuses );
                    //print($array['statuses'][0]['user']['screen_name']);
                    //print($array['statuses'][0]['created_at']);
                    //print($array['statuses'][0]['text']);
                    include("includes/widget.php");
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="rfooter">
        Made with <i class="fa fa-heart"></i> by Croc
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>