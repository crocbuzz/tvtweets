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
        <link rel="stylesheet" href="css/default.css" />
        <link rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        <div class="header">
            <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href="">movietweets</a>

                <ul class="pure-menu-list">
                    <li class="pure-menu-item"><a href="#about" class="pure-menu-link">About</a></li>
                    <li class="pure-menu-item"><a href="#movies" class="pure-menu-link">Movies</a></li>
                </ul>
            </div>
        </div>

        <div class="splash-container">
            <div class="splash">
                <h1 class="splash-head">Movie Tweets</h1>
                <p class="splash-subhead">
                    View related tweets based on your favorite movies...
                </p>
                <p>
                    <a href="#movies" class="pure-button pure-button-primary">Get Started</a>
                </p>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="content" id="about">
                <h2 class="content-head is-center">Entertainment at your fingertips.</h2>

                <div class="pure-g">
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                        <h3 class="content-subhead">
                            <i class="fa fa-rocket"></i>
                            Quick and Secure
                        </h3>
                        <p>
                            Sign in quickly and securely with your existing Twitter account. You never have to reveal your password to us.
                        </p>
                    </div>
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                        <h3 class="content-subhead">
                            <i class="fa fa-mobile"></i>
                            Mobile-Friendly
                        </h3>
                        <p>
                            Get the information you want whenever and wherever you are, even on mobile!
                        </p>
                    </div>
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                        <h3 class="content-subhead">
                            <i class="fa fa-clock-o"></i>
                            Always Accurate
                        </h3>
                        <p>
                            Our data sources are examined often for accuracy. We take pride in having the latest, most accurate data available to you.
                        </p>
                    </div>
                    <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                        <h3 class="content-subhead">
                            <i class="fa fa-hashtag"></i>
                            Relevent Hashtags
                        </h3>
                        <p>
                            We display the most relevant Twitter hashtag for the show or movie you choose.
                        </p>
                    </div>
                </div>
            </div>


            <div class="ribbon l-box-lrg pure-g">
                <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
                    <img class="pure-img-responsive" alt="File Icons" width="300" src="http://placehold.it/300x200">
                </div>
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

                    <h2 class="content-head content-head-ribbon">Disclaimer</h2>

                    <p>
                        This is an educational assignment prepared for the UCF SVAD course DIG4503: Rapid App with Dan Novatnak, Spring 2016.
                        Not a commercial product.
                    </p>
                </div>
            </div>

            <div class="content" id="movies">
                <h2 class="content-head is-center">Search The Database!</h2>

                <div class="pure-g">
                    <div class="l-box-lrg pure-u-1">
                        <form class="pure-form pure-form-stacked" action="results.php" method="get">
                            <fieldset>

                                <label for="name">Name of Movie</label>
                                <input name="name" type="text" placeholder="Enter the exact title">

                                <label for="year">Year Released (optional)</label>
                                <input name="year" type="number" minlength="4" maxlength="4" placeholder="YYYY">

                                <button type="submit" class="pure-button">Search</button>
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>

            <div class="footer l-box is-center">
                Made with <i class="fa fa-heart"></i> by Alex Crocker
            </div>

        </div>
    </body>
</html>